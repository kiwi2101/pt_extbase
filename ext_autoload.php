<?php
// DO NOT CHANGE THIS FILE! It is automatically generated by Tx_Extbase_Utility_Extension::createAutoloadRegistryForExtension.
// This file was generated on 2011-07-24 23:37

$extensionClassesPath = t3lib_extMgm::extPath('pt_extbase') . 'Classes/';
$unitTestsDir = t3lib_extMgm::extPath('pt_extbase') . 'Tests/Unit/';
return array(
	'tx_ptextbase_context' => $extensionClassesPath . 'Context.php',
	'tx_ptextbase_contextinterface' => $extensionClassesPath . 'ContextInterface.php',
	'tx_ptextbase_div' => $extensionClassesPath . 'Div.php',
	'tx_ptextbase_assertions_assert' => $extensionClassesPath . 'Assertions/Assert.php',
	'tx_ptextbase_collection_collection' => $extensionClassesPath . 'Collection/Collection.php',
	'tx_ptextbase_collection_objectcollection' => $extensionClassesPath . 'Collection/ObjectCollection.php',
	'tx_ptextbase_configuration_abstractconfiguration' => $extensionClassesPath . 'Configuration/AbstractConfiguration.php',
	'tx_ptextbase_configuration_abstractconfigurationbuilder' => $extensionClassesPath . 'Configuration/AbstractConfigurationBuilder.php',
	'tx_ptextbase_controller_abstractactioncontroller' => $extensionClassesPath . 'Controller/AbstractActionController.php',
	'tx_ptextbase_exception_assertion' => $extensionClassesPath . 'Exception/Assertion.php',
	'tx_ptextbase_exception_exception' => $extensionClassesPath . 'Exception/Exception.php',
	'tx_ptextbase_exception_internal' => $extensionClassesPath . 'Exception/Internal.php',
	'tx_ptextbase_extbase_abstractextbasecontext' => $extensionClassesPath . 'Extbase/AbstractExtbaseContext.php',
	'tx_ptextbase_lifecycle_eventinterface' => $extensionClassesPath . 'Lifecycle/EventInterface.php',
	'tx_ptextbase_lifecycle_hookmanager' => $extensionClassesPath . 'Lifecycle/HookManager.php',
	'tx_ptextbase_lifecycle_manager' => $extensionClassesPath . 'Lifecycle/Manager.php',
	'tx_ptextbase_lifecycle_managerfactory' => $extensionClassesPath . 'Lifecycle/ManagerFactory.php',
	'tx_ptextbase_registry_registry' => $extensionClassesPath . 'Registry/Registry.php',
	'tx_ptextbase_state_identifiableinterface' => $extensionClassesPath . 'State/IdentifiableInterface.php',
	'tx_ptextbase_state_gpvars_gpvarsadapter' => $extensionClassesPath . 'State/GpVars/GpVarsAdapter.php',
	'tx_ptextbase_state_gpvars_gpvarsadapterfactory' => $extensionClassesPath . 'State/GpVars/GpVarsAdapterFactory.php',
	'tx_ptextbase_state_gpvars_gpvarsinjectableinterface' => $extensionClassesPath . 'State/GpVars/GpVarsInjectableInterface.php',
	'tx_ptextbase_state_session_sessionpersistableinterface' => $extensionClassesPath . 'State/Session/SessionPersistableInterface.php',
	'tx_ptextbase_state_session_sessionpersistencemanager' => $extensionClassesPath . 'State/Session/SessionPersistenceManager.php',
	'tx_ptextbase_state_session_sessionpersistencemanagerfactory' => $extensionClassesPath . 'State/Session/SessionPersistenceManagerFactory.php',
	'tx_ptextbase_state_session_storage_adapterinterface' => $extensionClassesPath . 'State/Session/Storage/AdapterInterface.php',
	'tx_ptextbase_state_session_storage_dbadapter' => $extensionClassesPath . 'State/Session/Storage/DBAdapter.php',
	'tx_ptextbase_state_session_storage_dbadapterfactory' => $extensionClassesPath . 'State/Session/Storage/DBAdapterFactory.php',
	'tx_ptextbase_state_session_storage_feusersessionadapter' => $extensionClassesPath . 'State/Session/Storage/FeUserSessionAdapter.php',
	'tx_ptextbase_state_session_storage_nullstorageadapter' => $extensionClassesPath . 'State/Session/Storage/NullStorageAdapter.php',
	'tx_ptextbase_state_session_storage_sessionadapter' => $extensionClassesPath . 'State/Session/Storage/SessionAdapter.php',
	'tx_ptextbase_utility_debug' => $extensionClassesPath . 'Utility/Debug.php',
	'tx_ptextbase_utility_namespace' => $extensionClassesPath . 'Utility/NameSpace.php',
	'tx_ptextbase_view_baseview' => $extensionClassesPath . 'View/BaseView.php',
    'tx_ptextbase_viewhelpers_widget_treeviewhelper' => $extensionClassesPath . 'ViewHelpers/Widget/TreeViewHelper.php',
    'tx_ptextbase_viewhelpers_javascript_templateviewhelper' => $extensionClassesPath . 'ViewHelpers/Javascript/TemplateViewHelper.php',
    'tx_ptextbase_viewhelpers_widget_controller_treecontroller' => $extensionClassesPath . 'ViewHelpers/Widget/Controller/TreeController.php',
    'tx_ptextbase_tree_treerepositorybuilder'  => $extensionClassesPath . 'Tree/TreeRepositoryBuilder.php',

    // Additionally added files
    'tx_ptextbase_tests_unit_state_stubs_sessionadaptermock' => $unitTestsDir . 'State/Stubs/SessionAdapterMock.php',
    'tx_ptextbase_tests_unit_state_stubs_persistableobject' => $unitTestsDir . 'State/Stubs/PersistableObject.php',
    'tx_ptextbase_tests_unit_state_stubs_getpostvarobject'  => $unitTestsDir . 'State/Stubs/GetPostVarObject.php',
	'tx_ptextbase_tests_unit_abstractbasetestcase' => $unitTestsDir . 'AbstractBaseTest.php',
    'tx_ptextbase_tests_unit_tree_nodemock' => $unitTestsDir . 'Tree/NodeMock.php',


    // External files which are not auto-loaded by their respective extension
    'tx_fluid_core_widget_abstractwidgetviewhelper' => t3lib_extMgm::extPath('fluid') . 'Classes/Core/Widget/AbstractWidgetViewHelper.php',
);

?>