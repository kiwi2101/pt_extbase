<?php

########################################################################
# Extension Manager/Repository config file for ext "pt_extbase".
#
# Auto generated 20-11-2012 10:55
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Tools for Extbase development',
	'description' => 'Collection of tools for Extbase Extension development.',
	'category' => 'misc',
	'author' => 'Michael Knoll,Daniel Lienert',
	'author_email' => 'knoll@punkt.de,lienert@punkt.de',
	'author_company' => 'punkt.de GmbH,punkt.de GmbH',
	'shy' => '',
	'dependencies' => 'cms,extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.2.1-dev',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'extbase' => '1.4.0',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:213:{s:16:"ext_autoload.php";s:4:"c7b6";s:12:"ext_icon.gif";s:4:"5837";s:17:"ext_localconf.php";s:4:"3f98";s:14:"ext_tables.php";s:4:"9aa5";s:14:"ext_tables.sql";s:4:"d9ff";s:21:"ExtensionBuilder.json";s:4:"0bfa";s:19:"Classes/Context.php";s:4:"2dc0";s:28:"Classes/ContextInterface.php";s:4:"859b";s:15:"Classes/Div.php";s:4:"0bc8";s:29:"Classes/Assertions/Assert.php";s:4:"674f";s:33:"Classes/Collection/Collection.php";s:4:"99c4";s:39:"Classes/Collection/ObjectCollection.php";s:4:"aabe";s:46:"Classes/Collection/SortableEntityInterface.php";s:4:"5fc2";s:47:"Classes/Collection/SortableObjectCollection.php";s:4:"24dc";s:47:"Classes/Configuration/AbstractConfiguration.php";s:4:"3628";s:54:"Classes/Configuration/AbstractConfigurationBuilder.php";s:4:"985f";s:47:"Classes/Controller/AbstractActionController.php";s:4:"a51f";s:37:"Classes/Controller/TreeController.php";s:4:"fbc1";s:29:"Classes/Domain/Model/Page.php";s:4:"9141";s:34:"Classes/Domain/Model/TTContent.php";s:4:"d599";s:44:"Classes/Domain/Repository/PageRepository.php";s:4:"6ced";s:49:"Classes/Domain/Repository/TTContentRepository.php";s:4:"7451";s:51:"Classes/Domain/Validator/CaptchaStringValidator.php";s:4:"a88c";s:31:"Classes/Exception/Assertion.php";s:4:"79bd";s:31:"Classes/Exception/Exception.php";s:4:"bdd1";s:30:"Classes/Exception/Internal.php";s:4:"0fb9";s:42:"Classes/Extbase/AbstractExtbaseContext.php";s:4:"62da";s:36:"Classes/Lifecycle/EventInterface.php";s:4:"e555";s:33:"Classes/Lifecycle/HookManager.php";s:4:"5262";s:29:"Classes/Lifecycle/Manager.php";s:4:"ea66";s:36:"Classes/Lifecycle/ManagerFactory.php";s:4:"fb8a";s:32:"Classes/Object/ObjectManager.php";s:4:"d41d";s:48:"Classes/Parser/Sql/MultipleQueriesFileParser.php";s:4:"72cc";s:32:"Classes/Rbac/AllowAllService.php";s:4:"c4fc";s:37:"Classes/Rbac/RbacServiceInterface.php";s:4:"068f";s:38:"Classes/Rbac/TypoScriptRbacService.php";s:4:"f7bb";s:29:"Classes/Registry/Registry.php";s:4:"ebba";s:45:"Classes/Scheduler/SqlRunner/SqlRunnerTask.php";s:4:"1b10";s:61:"Classes/Scheduler/SqlRunner/SqlRunnerTaskAdditionalFields.php";s:4:"7096";s:33:"Classes/SignalSlot/Dispatcher.php";s:4:"2048";s:53:"Classes/SignalSlot/Exception/InvalidSlotException.php";s:4:"66e8";s:44:"Classes/SqlGenerator/PhpFileSqlGenerator.php";s:4:"5c9f";s:44:"Classes/SqlGenerator/SqlFileSqlGenerator.php";s:4:"b6a2";s:37:"Classes/SqlGenerator/SqlGenerator.php";s:4:"20d6";s:53:"Classes/SqlGenerator/SqlGeneratorCommandInterface.php";s:4:"1be4";s:46:"Classes/SqlGenerator/SqlGeneratorInterface.php";s:4:"9690";s:40:"Classes/SqlRunner/SqlRunnerInterface.php";s:4:"de4a";s:36:"Classes/SqlRunner/Typo3SqlRunner.php";s:4:"14ee";s:39:"Classes/State/IdentifiableInterface.php";s:4:"989c";s:38:"Classes/State/GpVars/GpVarsAdapter.php";s:4:"903e";s:45:"Classes/State/GpVars/GpVarsAdapterFactory.php";s:4:"3b22";s:50:"Classes/State/GpVars/GpVarsInjectableInterface.php";s:4:"58a4";s:53:"Classes/State/Session/SessionPersistableInterface.php";s:4:"5946";s:51:"Classes/State/Session/SessionPersistenceManager.php";s:4:"4fc6";s:58:"Classes/State/Session/SessionPersistenceManagerFactory.php";s:4:"6708";s:50:"Classes/State/Session/Storage/AdapterInterface.php";s:4:"72b3";s:43:"Classes/State/Session/Storage/DBAdapter.php";s:4:"9831";s:50:"Classes/State/Session/Storage/DBAdapterFactory.php";s:4:"421a";s:54:"Classes/State/Session/Storage/FeUserSessionAdapter.php";s:4:"c98d";s:52:"Classes/State/Session/Storage/NullStorageAdapter.php";s:4:"f6f2";s:48:"Classes/State/Session/Storage/SessionAdapter.php";s:4:"b4b1";s:32:"Classes/Tree/ArrayTreeWriter.php";s:4:"69bc";s:35:"Classes/Tree/ArrayWriterVisitor.php";s:4:"048f";s:36:"Classes/Tree/ExtJsJsonTreeWriter.php";s:4:"c877";s:39:"Classes/Tree/ExtJsJsonWriterVisitor.php";s:4:"41da";s:31:"Classes/Tree/JsonTreeWriter.php";s:4:"8ba0";s:37:"Classes/Tree/JSTreeJsonTreeWriter.php";s:4:"9c1f";s:40:"Classes/Tree/JSTreeJsonWriterVisitor.php";s:4:"529c";s:39:"Classes/Tree/NestedSetNodeInterface.php";s:4:"9182";s:39:"Classes/Tree/NestedSetTreeInterface.php";s:4:"7acc";s:37:"Classes/Tree/NestedSetTreeStorage.php";s:4:"0df2";s:36:"Classes/Tree/NestedSetTreeWalker.php";s:4:"69e3";s:33:"Classes/Tree/NestedSetVisitor.php";s:4:"4ea3";s:21:"Classes/Tree/Node.php";s:4:"f7d7";s:30:"Classes/Tree/NodeInterface.php";s:4:"dc4a";s:32:"Classes/Tree/NodePathBuilder.php";s:4:"aa8a";s:31:"Classes/Tree/NodeRepository.php";s:4:"6e1a";s:40:"Classes/Tree/NodeRepositoryInterface.php";s:4:"07bc";s:22:"Classes/Tree/Stack.php";s:4:"d770";s:38:"Classes/Tree/TcaTreeSelectorWidget.php";s:4:"d30e";s:37:"Classes/Tree/TraversableInterface.php";s:4:"7afe";s:21:"Classes/Tree/Tree.php";s:4:"959a";s:28:"Classes/Tree/TreeBuilder.php";s:4:"4aba";s:37:"Classes/Tree/TreeBuilderInterface.php";s:4:"d567";s:30:"Classes/Tree/TreeInterface.php";s:4:"0a2c";s:31:"Classes/Tree/TreeRepository.php";s:4:"37ea";s:38:"Classes/Tree/TreeRepositoryBuilder.php";s:4:"9055";s:37:"Classes/Tree/TreeStorageInterface.php";s:4:"bcb1";s:27:"Classes/Tree/TreeWalker.php";s:4:"8c7c";s:43:"Classes/Tree/TreeWalkerVisitorInterface.php";s:4:"560c";s:37:"Classes/Utility/AbstractTcaWidget.php";s:4:"50b3";s:34:"Classes/Utility/AjaxDispatcher.php";s:4:"b533";s:33:"Classes/Utility/eIDDispatcher.php";s:4:"490f";s:39:"Classes/Utility/FakeFrontendFactory.php";s:4:"ef10";s:36:"Classes/Utility/FeBeModeDetector.php";s:4:"9980";s:35:"Classes/Utility/HeaderInclusion.php";s:4:"f893";s:29:"Classes/Utility/NameSpace.php";s:4:"dad5";s:23:"Classes/Utility/Tca.php";s:4:"96a2";s:32:"Classes/Utility/UserDetector.php";s:4:"6bf0";s:25:"Classes/View/BaseView.php";s:4:"16e9";s:41:"Classes/ViewHelpers/CaptchaViewHelper.php";s:4:"0057";s:47:"Classes/ViewHelpers/CObjectConfigViewHelper.php";s:4:"7ac6";s:41:"Classes/ViewHelpers/CommentViewHelper.php";s:4:"0dd0";s:41:"Classes/ViewHelpers/ExplodeViewHelper.php";s:4:"1a80";s:47:"Classes/ViewHelpers/FlashMessagesViewHelper.php";s:4:"a4a3";s:48:"Classes/ViewHelpers/IfValueChangesViewHelper.php";s:4:"49da";s:50:"Classes/ViewHelpers/RequestArgumentsViewHelper.php";s:4:"0daf";s:46:"Classes/ViewHelpers/Be/FormTokenViewHelper.php";s:4:"6a00";s:49:"Classes/ViewHelpers/Be/Buttons/IconViewHelper.php";s:4:"5b60";s:52:"Classes/ViewHelpers/Content/RenderPageViewHelper.php";s:4:"27a8";s:45:"Classes/ViewHelpers/Form/SelectViewHelper.php";s:4:"f4d6";s:48:"Classes/ViewHelpers/Format/CssNameViewHelper.php";s:4:"0665";s:49:"Classes/ViewHelpers/Format/FileSizeViewHelper.php";s:4:"7944";s:50:"Classes/ViewHelpers/Format/HighlightViewHelper.php";s:4:"a87e";s:57:"Classes/ViewHelpers/Format/RemoveLineBreaksViewHelper.php";s:4:"0f67";s:54:"Classes/ViewHelpers/Format/StringToLowerViewHelper.php";s:4:"be4b";s:50:"Classes/ViewHelpers/Format/TimestampViewHelper.php";s:4:"f22c";s:53:"Classes/ViewHelpers/Javascript/TemplateViewHelper.php";s:4:"8a8d";s:48:"Classes/ViewHelpers/Rbac/HasAccessViewHelper.php";s:4:"0303";s:50:"Classes/ViewHelpers/Tree/ManipulatorViewHelper.php";s:4:"1c0a";s:43:"Classes/ViewHelpers/Tree/PathViewHelper.php";s:4:"8c73";s:47:"Classes/ViewHelpers/Tree/SelectorViewHelper.php";s:4:"84b8";s:26:"Configuration/TCA/Node.php";s:4:"a07d";s:38:"Configuration/TypoScript/constants.txt";s:4:"1d06";s:34:"Configuration/TypoScript/setup.txt";s:4:"bb44";s:24:"Documentation/Readme.txt";s:4:"7540";s:35:"Documentation/De/Rest/docutils.conf";s:4:"8287";s:35:"Documentation/De/Rest/UserGuide.rst";s:4:"61d2";s:35:"Documentation/En/Rest/docutils.conf";s:4:"8287";s:35:"Documentation/En/Rest/UserGuide.rst";s:4:"29e9";s:47:"Documentation/En/Rest/Development/ChangeLog.rst";s:4:"de38";s:42:"Documentation/En/Rest/Development/Misc.rst";s:4:"e405";s:45:"Documentation/En/Rest/Development/Utility.rst";s:4:"40b2";s:49:"Documentation/En/Rest/Development/ViewHelpers.rst";s:4:"59d3";s:54:"Resources/Private/JSTemplates/Tree/ManipulationTree.js";s:4:"f065";s:48:"Resources/Private/JSTemplates/Tree/SelectTree.js";s:4:"819c";s:57:"Resources/Private/JSTemplates/Tree/TreeManipulationExt.js";s:4:"7713";s:40:"Resources/Private/Language/locallang.xml";s:4:"d8d9";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"f9cc";s:44:"Resources/Private/Templates/Debug/Debug.html";s:4:"e259";s:73:"Resources/Private/Templates/Scheduler/SqlRunner/TaskAdditionalFields.html";s:4:"eb2f";s:45:"Resources/Private/Templates/Tca/TcaDebug.html";s:4:"0bb2";s:41:"Resources/Private/Templates/Tca/Tree.html";s:4:"db55";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:40:"Resources/Public/jstree/jquery.cookie.js";s:4:"c840";s:40:"Resources/Public/jstree/jquery.jstree.js";s:4:"83c7";s:43:"Resources/Public/jstree/themes/apple/bg.jpg";s:4:"eb12";s:42:"Resources/Public/jstree/themes/apple/d.png";s:4:"84c5";s:51:"Resources/Public/jstree/themes/apple/dot_for_ie.gif";s:4:"8c30";s:46:"Resources/Public/jstree/themes/apple/style.css";s:4:"972f";s:49:"Resources/Public/jstree/themes/apple/throbber.gif";s:4:"7b97";s:44:"Resources/Public/jstree/themes/classic/d.gif";s:4:"e59b";s:44:"Resources/Public/jstree/themes/classic/d.png";s:4:"6519";s:53:"Resources/Public/jstree/themes/classic/dot_for_ie.gif";s:4:"8c30";s:48:"Resources/Public/jstree/themes/classic/style.css";s:4:"5a52";s:51:"Resources/Public/jstree/themes/classic/throbber.gif";s:4:"7b97";s:44:"Resources/Public/jstree/themes/default/d.gif";s:4:"25d6";s:44:"Resources/Public/jstree/themes/default/d.png";s:4:"0eb5";s:48:"Resources/Public/jstree/themes/default/style.css";s:4:"0057";s:51:"Resources/Public/jstree/themes/default/throbber.gif";s:4:"7b97";s:48:"Resources/Public/jstree/themes/default-rtl/d.gif";s:4:"e3fb";s:48:"Resources/Public/jstree/themes/default-rtl/d.png";s:4:"d6f6";s:51:"Resources/Public/jstree/themes/default-rtl/dots.gif";s:4:"3ce3";s:52:"Resources/Public/jstree/themes/default-rtl/style.css";s:4:"d26c";s:55:"Resources/Public/jstree/themes/default-rtl/throbber.gif";s:4:"7b97";s:23:"Tests/DebugCodeTest.php";s:4:"5a2a";s:44:"Tests/Functional/Tree/JsonTreeWriterTest.php";s:4:"20ed";s:28:"Tests/Selenium/TreeClickTest";s:4:"aa72";s:31:"Tests/Unit/AbstractBaseTest.php";s:4:"8654";s:32:"Tests/Unit/AbstractModelTest.php";s:4:"1df8";s:46:"Tests/Unit/Collection/ObjectCollectionTest.php";s:4:"4e70";s:54:"Tests/Unit/Collection/SortableObjectCollectionTest.php";s:4:"612a";s:61:"Tests/Unit/Configuration/AbstractConfigurationBuilderTest.php";s:4:"6561";s:54:"Tests/Unit/Configuration/AbstractConfigurationTest.php";s:4:"e7fd";s:54:"Tests/Unit/Controller/AbstractActionControllerTest.php";s:4:"96d0";s:40:"Tests/Unit/Lifecycle/HookManagerTest.php";s:4:"0c2b";s:43:"Tests/Unit/Lifecycle/ManagerFactoryTest.php";s:4:"933c";s:36:"Tests/Unit/Lifecycle/ManagerTest.php";s:4:"f879";s:55:"Tests/Unit/Parser/Sql/MultipleQueriesFileParserTest.php";s:4:"498f";s:39:"Tests/Unit/Rbac/AllowAllServiceTest.php";s:4:"8b84";s:45:"Tests/Unit/Rbac/TypoScriptRbacServiceTest.php";s:4:"865b";s:51:"Tests/Unit/SqlGenerator/PhpFileSqlGeneratorTest.php";s:4:"51bc";s:44:"Tests/Unit/SqlGenerator/SqlGeneratorTest.php";s:4:"86cf";s:45:"Tests/Unit/State/GpVars/GpVarsAdapterTest.php";s:4:"bd4f";s:65:"Tests/Unit/State/Session/SessionPersistenceManagerFactoryTest.php";s:4:"7835";s:58:"Tests/Unit/State/Session/SessionPersistenceManagerTest.php";s:4:"4c37";s:57:"Tests/Unit/State/Session/Storage/DBAdapterFactoryTest.php";s:4:"c964";s:50:"Tests/Unit/State/Session/Storage/DBAdapterTest.php";s:4:"1e63";s:61:"Tests/Unit/State/Session/Storage/FeUserSessionAdapterTest.php";s:4:"e159";s:55:"Tests/Unit/State/Session/Storage/SessionAdapterTest.php";s:4:"7976";s:43:"Tests/Unit/State/Stubs/GetPostVarObject.php";s:4:"72d7";s:44:"Tests/Unit/State/Stubs/PersistableObject.php";s:4:"700d";s:45:"Tests/Unit/State/Stubs/SessionAdapterMock.php";s:4:"9280";s:46:"Tests/Unit/Tree/ExtJSJsonWriterVisitorTest.php";s:4:"a5b9";s:44:"Tests/Unit/Tree/NestedSetTreeStorageTest.php";s:4:"7cb0";s:40:"Tests/Unit/Tree/NestedSetVisitorTest.php";s:4:"c906";s:28:"Tests/Unit/Tree/NodeMock.php";s:4:"12df";s:38:"Tests/Unit/Tree/NodeRepositoryTest.php";s:4:"b539";s:28:"Tests/Unit/Tree/NodeTest.php";s:4:"eac0";s:35:"Tests/Unit/Tree/TreeBuilderTest.php";s:4:"8c2b";s:28:"Tests/Unit/Tree/TreeTest.php";s:4:"95bc";s:34:"Tests/Unit/Tree/TreeWalkerTest.php";s:4:"988a";s:46:"Tests/Unit/Utility/FakeFrontendFacroryTest.php";s:4:"4de4";s:41:"Tests/Unit/Utility/NameSpaceArrayTest.php";s:4:"06b7";s:57:"Tests/Unit/ViewHelpers/RequestArgumentsViewHelperTest.php";s:4:"917a";s:53:"Tests/Unit/ViewHelpers/Be/FormTokenViewHelperTest.php";s:4:"c678";s:55:"Tests/Unit/ViewHelpers/Format/CssNameViewHelperTest.php";s:4:"c9d7";s:56:"Tests/Unit/ViewHelpers/Format/FileSizeViewHelperTest.php";s:4:"79d5";s:64:"Tests/Unit/ViewHelpers/Format/RemoveLineBreaksViewHelperTest.php";s:4:"9e22";s:61:"Tests/Unit/ViewHelpers/Format/StringToLowerViewHelperTest.php";s:4:"b940";s:60:"Tests/Unit/ViewHelpers/Javascript/TemplateViewHelperTest.php";s:4:"64b9";s:50:"Tests/Unit/ViewHelpers/Tree/PathViewHelperTest.php";s:4:"2994";s:54:"Tests/Unit/ViewHelpers/Tree/SelectorViewHelperTest.php";s:4:"32c9";}',
);

?>