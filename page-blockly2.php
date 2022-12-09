<?php
/*
Template Name: Blockly2
*/
// define( 'WP_USE_THEMES', true );
// require __DIR__ . '/wp-blog-header.php';
$c_user = wp_get_current_user();
if ( is_user_logged_in() ) {
	$nickname = get_user_meta( wp_get_current_user()->ID, 'nickname', true );
	$MC_NN__ = $nickname ? $nickname : $c_user->display_name;
} 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php kava_body_open(); ?>
<?php do_action( 'kava-theme/site/page-start' ); ?>
<?php kava_get_page_preloader(); ?>
<div id="page" class="site">

	<div id="content" <?php echo kava_get_container_classes( 'site-content' ); ?>>

?>

    <script src="/wp-content/plugins/wp-blockly/blockly/blockly_compressed.js"></script> 
    <script src="/wp-content/plugins/wp-blockly/blockly/blocks_compressed.js"></script>
    <script src="/wp-content/plugins/wp-blockly/blockly/js/javascript_compressed.js"></script>
    <script src="/wp-content/plugins/wp-blockly/blockly/js/javascript2_compressed.js"></script>
    <script src="/wp-content/plugins/wp-blockly/blockly/js/python_compressed.js"></script>
    <script src="/wp-content/plugins/wp-blockly/blockly/js/php_compressed.js"></script>
    <script src="/wp-content/plugins/wp-blockly/blockly/js/lua_compressed.js"></script>
    <script src="/wp-content/plugins/wp-blockly/blockly/js/dart_compressed.js"></script>
    <script src="/wp-content/plugins/wp-blockly/blockly/js/acorn_interpreter.js"></script>
    <script src="/wp-content/plugins/wp-blockly/blockly/js/msg/js/ru.js"></script>
    <script src="https://www.gstatic.com/external_hosted/google_code_prettify/prettify_compiled.js"></script>
    <script src="/wp-content/plugins/wp-blockly/blockly/js/minecraft_blocks.js?2"></script>
    <script src="/wp-content/plugins/wp-blockly/blockly/js/minecraft_javascript.js"></script>
    <script src="/wp-content/plugins/wp-blockly/blockly/js/minecraft_javascript2.js?2"></script>
    <script src="/wp-content/plugins/wp-blockly/blockly/js/minecraft_python.js"></script>
    <script src="/wp-content/plugins/wp-blockly/blockly/js/minecraft_php.js"></script>
	<script src="/wp-content/plugins/wp-blockly/blockly/js/minecraft_func.js"></script>
    <script src="/wp-content/plugins/wp-blockly/blockly/js/minecraft_lua.js"></script>
    <script src="/wp-content/plugins/wp-blockly/blockly/js/minecraft_dart.js"></script>
    <script src="/wp-content/plugins/wp-blockly/blockly/js/storage.js"></script>

<style>
    @import url("https://fonts.googleapis.com/icon?family=Material+Icons");

    body {
        margin: 0;
        padding: 0;
    }

    .app-container {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        overflow: hidden;
        background-color: #fff;
        box-shadow: 0 0 4px rgba(0,0,0,.14),0 4px 8px rgba(0,0,0,.28);
        margin: 0;
    }

    .main {
        position: absolute;
        top: 0;
        bottom: 0;
    }

    .blockly-panel {
        left: 0px;
        width: 78%;
        /*   right: 298px; */

    }

    .output-panel {
        right: 0px;
        width: 22%;
        background-color: white;
        overflow: scroll;
        padding: 8px;
        box-shadow: 0 1px 4px rgba(0,0,0,.37);
    }

    .dropdown-bar {
        display: block;
        font-family: sans-serif;
        font-size: 16px;
        width: 200px;
        margin-left: auto;
        margin-right: auto;
    }

    #languageDropdown {
        border: 0;
        background-color: transparent;
        font-size: 16px;
        outline: none;
    }

    #im-just-an-underline {
        border-bottom: 1px solid;
        display: inline;
        padding-right: 5px;
    }

    .POps {
        height: 1px;
        border: 0;
        background-color: rgba(0,0,0,.2);
    }

    .deleteWorld-button:hover {
        box-shadow: 0 2px 2px rgba(0,0,0,.2),0 6px 10px rgba(0,0,0,.3);
        transition: box-shadow .3s ease-in-out;
    }

    .but-not-that-pretty {
        border: 0 !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    g.blocklyFlyoutLabel.label_minecraft > text {
        font-style: italic !important;
        fill: green !important;;
    }

    @keyframes showRight {

        from {right:-100%;}

        to {right:0;}

    }

    .blocklySvg {
        width:100%;
    }

    .blockly-panel {
        width: calc(100% - 57px);
    }

    #codeDiv {
        display:none;
        right: 56px;
        animation: showRight .3s;
    }

    .output-panel {
        width: 300px;
    }

    #right-panel{
        display: flex;
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        width: 57px;
        flex-direction: column;
        align-items: center;
    }
</style>

<script>
    if ('BlocklyStorage' in window) {
        BlocklyStorage.HTTPREQUEST_ERROR = 'There was a problem with the request.\n';
        BlocklyStorage.LINK_ALERT = 'Share your blocks with the below public link. We\'ll store them for a year. Please be sure not to include any private information.\n\n%1';
        BlocklyStorage.HASH_ERROR = 'Sorry, "%1" doesn\'t correspond with any saved Blockly file.';
        BlocklyStorage.XML_ERROR = 'Could not load your saved file.\n' +
            'Perhaps it was created with a different version of Blockly?';
    } else {
        document.write('<p id="sorry">Sorry, cloud storage is not available.  This demo must be hosted on App Engine.</p>');
    }
</script>

<?php $current_user = wp_get_current_user(); ?>

<div class="popup-menu-container" id="popup-menu-container" onclick="(document.getElementById('popup-menu-container').style.display='none')">
    <div class="popup-col-container">
        <img class="close-btn" src="/wp-content/uploads/2022/06/cross-1.svg" onclick="(document.getElementById('popup-menu-container').style.display='none')">
        <div class="popup-row-menu">
            <a href="/">
            <img class="logo-img" src="/wp-content/uploads/2020/11/logo-x2.png">
            </a>
            <div class="menu-text">
                <div class="menu-wrapper"><a href="/account/"><?php echo $current_user->user_login; ?></a></div>
                <div class="menu-wrapper"><a href="/catalog/">Каталог</a></div>
                <div class="menu-wrapper"><a href="/blockly-minecraft/">Blockly</a></div>
            </div>
        </div>
    </div>
</div>

<div class="popup-rotate-device-container" id="popup-rotate-device-container">
            <div class="popup-rotate-device-promotion">
            <img class="popup-rotate-device-img" src="/wp-content/uploads/2020/11/icon.png">
            <div class="popup-rotate-device-text">Переверните ваше устройство</div>
            </div>
      </div>

<div class="app-container">
    <div id="blocklyDiv" class="main blockly-panel"></div>
    <div id="codeDiv" class="main output-panel">
        <div class="dropdown-bar">
            Language:
            <div id="im-just-an-underline">
                <select id="languageDropdown" onChange="myUpdateFunction();">
                    <option value="JavaScript">JavaScript</option>
                    <option value="JavaScript2">JavaScript2</option>
                    <option value="Python">Python</option>
                    <option value="PHP">PHP</option>
                    <option value="Lua">Lua</option>
                    <option value="Dart">Dart</option>
                </select>
            </div>
        </div>
        <hr class="POps">
        <pre translate="no" dir="ltr"></pre>
    </div>

    <div id="right-panel">

    </div>

<xml id="toolbox" style="display: none">
    <category id="catLogic" colour="210" name="Логика">
		
        <block type="minecraft_tpdrone">
            <field name="x" variabletype="NUM">2</field>
        </block>

        <block type="controls_if"></block>
        <block type="logic_compare"></block>
        <block type="logic_operation"></block>
        <block type="logic_negate"></block>
        <block type="logic_boolean"></block>
        <block type="logic_boolean">
            <field name="BOOL">FALSE</field>
        </block>
        <block type="minecraft_wait_a_fn">
        </block>
    </category>
    <category id="catLoops" colour="120" name="Циклы">
        <block type="minecraft_pause"></block>
        <block type="controls_repeat_ext">
            <value name="TIMES">
                <shadow type="math_number">
                    <field name="NUM">10</field>
                </shadow>
            </value>
        </block>
        <block type="controls_whileUntil"></block>
        <block type="controls_for">
            <value name="FROM">
                <shadow type="math_number">
                    <field name="NUM">1</field>
                </shadow>
            </value>
            <value name="TO">
                <shadow type="math_number">
                    <field name="NUM">10</field>
                </shadow>
            </value>
            <value name="BY">
                <shadow type="math_number">
                    <field name="NUM">1</field>
                </shadow>
            </value>
        </block>
        <block type="controls_forEach"></block>
        <block type="controls_flow_statements"></block>
    </category>
    <category id="catMath" colour="230" name="Математика">
        <block type="math_number"></block>
        <block type="math_arithmetic">
            <value name="A">
                <shadow type="math_number">
                    <field name="NUM">1</field>
                </shadow>
            </value>
            <value name="B">
                <shadow type="math_number">
                    <field name="NUM">1</field>
                </shadow>
            </value>
        </block>
        <block type="math_single">
            <value name="NUM">
                <shadow type="math_number">
                    <field name="NUM">9</field>
                </shadow>
            </value>
        </block>
        <block type="math_trig">
            <value name="NUM">
                <shadow type="math_number">
                    <field name="NUM">45</field>
                </shadow>
            </value>
        </block>
        <block type="math_constant"></block>
        <block type="math_number_property">
            <value name="NUMBER_TO_CHECK">
                <shadow type="math_number">
                    <field name="NUM">0</field>
                </shadow>
            </value>
        </block>
        <block type="math_change">
            <value name="DELTA">
                <shadow type="math_number">
                    <field name="NUM">1</field>
                </shadow>
            </value>
        </block>
        <block type="math_round">
            <value name="NUM">
                <shadow type="math_number">
                    <field name="NUM">3.1</field>
                </shadow>
            </value>
        </block>
        <block type="math_on_list"></block>
        <block type="math_modulo">
            <value name="DIVIDEND">
                <shadow type="math_number">
                    <field name="NUM">64</field>
                </shadow>
            </value>
            <value name="DIVISOR">
                <shadow type="math_number">
                    <field name="NUM">10</field>
                </shadow>
            </value>
        </block>
        <block type="math_constrain">
            <value name="VALUE">
                <shadow type="math_number">
                    <field name="NUM">50</field>
                </shadow>
            </value>
            <value name="LOW">
                <shadow type="math_number">
                    <field name="NUM">1</field>
                </shadow>
            </value>
            <value name="HIGH">
                <shadow type="math_number">
                    <field name="NUM">100</field>
                </shadow>
            </value>
        </block>
        <block type="math_random_int">
            <value name="FROM">
                <shadow type="math_number">
                    <field name="NUM">1</field>
                </shadow>
            </value>
            <value name="TO">
                <shadow type="math_number">
                    <field name="NUM">100</field>
                </shadow>
            </value>
        </block>
        <block type="math_random_float"></block>
    </category>
    <category id="catText" colour="160" name="Тексты">
        <block type="text"></block>
        <block type="text_join"></block>
        <block type="text_append">
            <value name="TEXT">
                <shadow type="text"></shadow>
            </value>
        </block>
        <block type="text_length">
            <value name="VALUE">
                <shadow type="text">
                    <field name="TEXT">abc</field>
                </shadow>
            </value>
        </block>
        <block type="text_isEmpty">
            <value name="VALUE">
                <shadow type="text">
                    <field name="TEXT"></field>
                </shadow>
            </value>
        </block>
        <block type="text_indexOf">
            <value name="VALUE">
                <block type="variables_get">
                    <field name="VAR">text</field>
                </block>
            </value>
            <value name="FIND">
                <shadow type="text">
                    <field name="TEXT">abc</field>
                </shadow>
            </value>
        </block>
        <block type="text_charAt">
            <value name="VALUE">
                <block type="variables_get">
                    <field name="VAR">text</field>
                </block>
            </value>
        </block>
        <block type="text_getSubstring">
            <value name="STRING">
                <block type="variables_get">
                    <field name="VAR">text</field>
                </block>
            </value>
        </block>
        <block type="text_changeCase">
            <value name="TEXT">
                <shadow type="text">
                    <field name="TEXT">abc</field>
                </shadow>
            </value>
        </block>
        <block type="text_trim">
            <value name="TEXT">
                <shadow type="text">
                    <field name="TEXT">abc</field>
                </shadow>
            </value>
        </block>
        <block type="text_print">
            <value name="TEXT">
                <shadow type="text">
                    <field name="TEXT">abc</field>
                </shadow>
            </value>
        </block>
        <block type="text_prompt_ext">
            <value name="TEXT">
                <shadow type="text">
                    <field name="TEXT">abc</field>
                </shadow>
            </value>
        </block>
    </category>
    <sep></sep>
    <category id="catVariables" colour="330" name="Переменные" custom="VARIABLE">

    </category>
    <category id="catFunctions" colour="290" name="Функции" custom="PROCEDURE">
	</category>
    <category id="catPalitrFunctions" colour="22" name="Палитра" custom="COLOUR_PALETTE"></category>
    <category id="catColour" colour="20" name="Цвета">
        <block type="colour_random"></block>
        <block type="colour_rgb">
            <value name="RED">
                <shadow type="math_number">
                    <field name="NUM">100</field>
                </shadow>
            </value>
            <value name="GREEN">
                <shadow type="math_number">
                    <field name="NUM">50</field>
                </shadow>
            </value>
            <value name="BLUE">
                <shadow type="math_number">
                    <field name="NUM">0</field>
                </shadow>
            </value>
        </block>
        <block type="colour_blend">
            <value name="COLOUR1">
                <shadow type="colour_picker">
                    <field name="COLOUR">#ff0000</field>
                </shadow>
            </value>
            <value name="COLOUR2">
                <shadow type="colour_picker">
                    <field name="COLOUR">#3333ff</field>
                </shadow>
            </value>
            <value name="RATIO">
                <shadow type="math_number">
                    <field name="NUM">0.5</field>
                </shadow>
            </value>
        </block>
    </category>
    <sep></sep>
    <category name="Minecraft" colour="255">
		<block type="minecraft_connect"></block>   
		<block type="minecraft_coordBlock"></block> 
		<block type="minecraft_getdroneblock"></block>
		<block type="minecraft_getServer"></block>
		<block type="minecraft_jsonParse"></block>		
        
    </category>	
    <category name="Дрон" colour="RED">
        <block type="minecraft_build"></block>
        <block type="minecraft_moveDrone"></block>
        <block type="minecraft_botToPlayer"></block>        
        <block type="minecraft_tpdrone">
            <value name="x">
                <shadow type="math_number">
                    <field name="NUM">10</field>
                </shadow>
            </value>
            <value name="y">
                <shadow type="math_number">
                    <field name="NUM">11</field>
                </shadow>
            </value>
            <value name="z">
                <shadow type="math_number">
                    <field name="NUM">12</field>
                </shadow>
            </value>

        </block>
		<block type="minecraft_mineblock"></block>
		<block type="minecraft_movehand"></block>
		<block type="minecraft_setBlockData"></block>
    </category>
	<category name="Бот" colour="#ff6161">
		<block type="minecraft_droneSputnik"></block>
		<block type="minecraft_momentmove"></block>
		<block type="minecraft_sputnikCraft"></block>
		<block type="minecraft_sputnikmineblock"></block>
		<block type="minecraft_sputnikInvSlot"></block>
		<block type="minecraft_sputnikBuild"></block>
		<block type="minecraft_unSputnik"></block>
		<block type="minecraft_sputnikProg"></block>
		<block type="minecraft_progSputnikMove"></block>
		<block type="minecraft_progSputnikAtack"></block>		
	</category>
    <category name="Игровой процесс" colour="359">
		<block type="minecraft_teleport"></block>
		<block type="minecraft_summon"></block>
		<block type="minecraft_weather"></block>
		<block type="minecraft_time"></block>		
 		<block type="minecraft_text"></block>
		<block type="minecraft_playnote"></block>
    </category>
</xml>
<xml xmlns="https://developers.google.com/blockly/xml" id="startBlocks" style="display: none">
<!--    <block type="minecraft_connect" x="10" y="10"></block>-->
</xml>

<script src="/wp-content/plugins/wp-blockly/assets/js/wp-blockly-frame2.js?16"></script>
	
<script>
    var toolbox = document.getElementById("toolbox");
    var options = {
        toolbox: document.getElementById('toolbox'),
        collapse: true,
        comments: true,
        disable: true,
        maxBlocks: Infinity,
        trashcan: true,
        horizontalLayout: false,
        toolboxPosition: 'start',
        css: true,
        media: 'media/',
        rtl: false,
        scrollbars: true,
        sounds: true,
        oneBasedIndex: true,
        grid: {
            spacing: 20,
            length: 1,
            colour: '#888',
            snap: false
        }
    };
	
//console.log( 'Blockly 1 ::', Blockly);	
var registerFirstContextMenuOptions = () => {
	//console.log( 'Blockly 2 ::', Blockly);	
    var workspaceItem = {
      displayText: 'Hello World',
      preconditionFn: function(scope) {
        return 'enabled';
      },
      callback: function(scope) {
      },
      scopeType: 'workspace', //Blockly.ContextMenuRegistry.ScopeType.WORKSPACE,
      id: 'hello_world',
      weight: 100,
    };
	//parent.
	Blockly.ContextMenuRegistry.registry.register(workspaceItem);
}
//registerFirstContextMenuOptions();
	var workspace = Blockly.inject('blocklyDiv', options);

    Blockly.Xml.domToWorkspace(document.getElementById('startBlocks'), workspace);

    let myApp = {};
    myApp.getPalette = function () {
        return ['#00ffff', '#000000', '#0000ff', '#ff00ff', '#808080', '#008000', '#00ff00', '#800000', '#000080', '#808000', '#800080', '#ff0000', '#c0c0c0', '#008080', '#ffffff', '#ffff00'];

    };

    myApp.coloursFlyoutCallback = function (workspace) {

        var colourList = myApp.getPalette();
        var xmlList = [];
        if (Blockly.Blocks['colour_picker']) {
            for (var i = 0; i < colourList.length; i++) {
                var blockText = '<block type="colour_picker">' +
                    '<field name="COLOUR">' + colourList[i] + '</field>' +
                    '</block>';
                var block = Blockly.Xml.textToDom(blockText);
                xmlList.push(block);
            }
        }
        return xmlList;
    };

    workspace.registerToolboxCategoryCallback(
        'COLOUR_PALETTE', myApp.coloursFlyoutCallback);

    function myUpdateFunction(event) {
        var languageDropdown = document.getElementById('languageDropdown');
        var languageSelection = languageDropdown.options[languageDropdown.selectedIndex].value;
        var codeDiv = document.getElementById('codeDiv');
        var codeHolder = document.createElement('pre');
        codeHolder.className = 'prettyprint but-not-that-pretty';
        var code = document.createTextNode(Blockly[languageSelection].workspaceToCode(workspace));
        codeHolder.appendChild(code);
        codeDiv.replaceChild(codeHolder, codeDiv.lastElementChild);
        prettyPrint();
    }

    workspace.addChangeListener(myUpdateFunction);

	//Получение ника игрока с сайта
	var RT ='test';
	var NickName = jQuery('.jet-auth-links__prefix').first().text(); //parent.
	window.MC_NN__ = "<?php echo $MC_NN__; ?>";
	var NickName = window.MC_NN__;

	jQuery('.jet-auth-links__prefix').hide();
    
	//Тут выполняем js код

    if (NickName === null ) {
        alert("Требуется залогиниться");
    }
	else {
		//var confnick = confirm ('Твой ник на сервере: ' + NickName + '?'); // don't delete
		//if(confnick == 0) 													// don't delete
			//alert("Авторизуйся с нужного ника и зайди на страницу повторно."); // don't delete
	}

    //document.getElementById("nick").innerHTML = "Игровой ник с которого запускаются скрипты на сервере: <b>"+NickName+"</b>";

</script>

<link href="/wp-content/plugins/wp-blockly/assets/js/bundle.css?3" rel="stylesheet">
<script src="/wp-content/plugins/wp-blockly/assets/js/bundle.js?3"></script>

<?php get_footer(); ?>
