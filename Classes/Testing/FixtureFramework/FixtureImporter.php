<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 punkt.de GmbH
 *  Authors:
 *    Joachim Mathes <mathes@punkt.de>,
 *    Sascha Dörr <doerr@punkt.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * FixtureImporter
 *
 * @package pt_extbase
 * @subpackage Testing\FixtureFramework
 */
class Tx_PtExtbase_Testing_FixtureFramework_FixtureImporter {

	/**
	 * @var Tx_PtExtbase_Testing_FixtureFramework_Fixture
	 */
	protected $fixture;

	/**
	 * @param $fixtures array
	 * @return void
	 */
	public function import($fixtures) {
		foreach ($fixtures as $fixture) { /** @var Tx_PtExtbase_Testing_FixtureFramework_Fixture $fixture */
			$this->fixture = $fixture;
			$this->setConnection();
			if ($this->fixture->getSchemaFilePath() != "") {
				$this->importSchema();
			}
			$this->importFixture();
		}
	}

	/**
	 * @return void
	 */
	protected function setConnection() {
		$this->fixture->setConnection(
			new PHPUnit_Extensions_Database_DB_DefaultDatabaseConnection(
				new PDO(
					$this->fixture->getCredentials()->getDsn(),
					$this->fixture->getCredentials()->getUsername(),
					$this->fixture->getCredentials()->getPassword()
				),
				$this->fixture->getCredentials()->getSchema()
			)
		);
		$this->fixture->getConnection()->getConnection()->query('SET NAMES utf8')->execute();
	}

	/**
	 * @return void
	 * @throws Tx_PtDpppTest_PhpUnit_Exception_TestException
	 */
	protected function importSchema() {
		$schemaFilePath = PATH_site . '/' . $this->fixture->getSchemaFilePath();
		if ($schemaFilePath != '') {
			if (file_exists($schemaFilePath)) {
				$command[] = 'mysql';
				$command[] = '-h ' . $this->fixture->getCredentials()->getHostname();
				$command[] = '-u ' . $this->fixture->getCredentials()->getUsername();
				$command[] = '-p' . $this->fixture->getCredentials()->getPassword();
				$command[] = $this->fixture->getCredentials()->getSchema();
				$command[] = '< ' . $schemaFilePath;
				$this->runCommand(implode(' ', $command));
			} else {
				throw new Tx_PtDpppTest_PhpUnit_Exception_TestException('Invalid schema file path ' . $schemaFilePath, 1365698869);
			}
		}
	}

	/**
	 * @return void
	 * @throws Tx_PtDpppTest_PhpUnit_Exception_TestException
	 */
	protected function importFixture() {
		if (!empty($this->fixture)) {
			if($this->fixture instanceof Tx_PtExtbase_Testing_FixtureFramework_Fixture) {
				$this->fixture->getConnection()->getConnection()->query('SET NAMES utf8')->execute();
				$this->fixture->getSetUpOperation()->execute($this->fixture->getConnection(), $this->fixture->getDataSet());
			} else {
				throw new Tx_PtDpppTest_PhpUnit_Exception_TestException('Invalid fixture ' . get_class($this->fixture), 1365698869);
			}
		}
	}

	/**
	 * @param string $command
	 * @param boolean $returnOutput
	 * @return array
	 * @throws \RuntimeException
	 */
	protected function runCommand($command, $returnOutput = FALSE) {
		$output = array();
		if ($returnOutput === TRUE) {
			exec($command, $output, $returnValue);
		} else {
			system($command, $returnValue);
		}
		if ($returnValue !== 0) {
			throw new \RuntimeException(sprintf('Command "%s" exited with exit code %s. Aborting!', $command, $returnValue));
		}
		return $output;
	}

}
?>