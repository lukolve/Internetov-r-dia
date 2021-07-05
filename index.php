<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

session_start();

if (strnatcmp(phpversion(),'5.4.11') >= 0) 
{ 
	// equal or newer
} 
else 
{ 
	// not sufficiant 
}

//for PHP < 5.3.0
if ( !defined('__DIR__') ) define('__DIR__', dirname(__FILE__));

?>
<html>
<head>
  <title>Internetové rádia na jendom mieste</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700" />
  <link rel="stylesheet" href="css/player.css" />
<style>
#mySidenav a {
  position: absolute;
  left: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#infos {
  top: 20px;
  background-color: #4CAF50;
}

#radios {
  top: 80px;
  background-color: #2196F3;
}

#files {
  top: 140px;
  background-color: #f44336;
}

#upload {
  top: 200px;
  background-color: #555
}

.input_ida {
}

</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="#" id="infos">Infos</a>
  <a href="#" id="radios">Radios</a>
  <a href="#" id="files">Files</a>
  <a href="#" id="upload">Upload</a>
</div>

<div style="margin-left:80px;">
  
  <p>
  
  <div class="container">
  
	<h2>Internetové rádia na jednom mieste</h2>
	
  <div class="panel panel-default">
			<audio preload="auto" controls>
				<source src="<?php if ($_POST['input_ida']!=NULL) echo ($_POST['input_ida']); else echo ("http://live.slovakradio.sk:8000/Slovensko_128.mp3"); ?>">
			</audio>
			<script src="js/jquery.js"></script>
			<script src="js/player.js"></script>
			<script>$( function() { $( 'audio' ).audioPlayer(); } );</script>
	</div></div>

<form NAME="formular" action="index.php" method="post" onsubmit="">

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Slovenské rádio</div>
    <div class="panel-body">Klikni a spusť <button class="input_id"  name="input_ida" value="http://live.slovakradio.sk:8000/Slovensko_128.mp3">Slovenské rádio</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://live.slovakradio.sk:8000/Slovensko_128.mp3</div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio FM</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://live.slovakradio.sk:8000/FM_128.mp3">Rádio FM</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://live.slovakradio.sk:8000/FM_128.mp3</div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Klasika</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://live.slovakradio.sk:8000/Klasika_128.mp3">Rádio Klasika</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://live.slovakradio.sk:8000/Klasika_128.mp3</div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Devín</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://live.slovakradio.sk:8000/Devin_128.mp3">Rádio Devín</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://live.slovakradio.sk:8000/Devin_128.mp3</div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Litera</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://live.slovakradio.sk:8000/Litera_128.mp3">Rádio Litera</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://live.slovakradio.sk:8000/Litera_128.mp3</div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Regina Bratislava</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://live.slovakradio.sk:8000/Regina_BA_128.mp3">Rádio Regina Bratislava</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://live.slovakradio.sk:8000/Regina_BA_128.mp3</div>
  </div>
</div>


<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Regina Banská Bystrica</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://live.slovakradio.sk:8000/Regina_BB_128.mp3">Rádio Regina Banská Bystrica</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://live.slovakradio.sk:8000/Regina_BB_128.mp3</div>
  </div>
</div>


<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Regina Košice</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://live.slovakradio.sk:8000/Regina_KE_128.mp3">Rádio Regina Košice</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://live.slovakradio.sk:8000/Regina_KE_128.mp3</div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Vlna</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://stream.radioservices.sk:8000/vlna-hi.mp3">Rádio Vlna</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://stream.radioservices.sk:8000/vlna-hi.mp3</div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Košice</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://stream.ecce.sk:8000/radiokosice-128.mp3">Rádio Košice</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://stream.ecce.sk:8000/radiokosice-128.mp3</div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Lumen</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://audio.lumen.sk:8000/live128.mp3">Rádio Lumen</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://audio.lumen.sk:8000/live128.mp3</div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Jemné</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://stream.radioservices.sk:8001/jemne-hi.mp3">Rádio Jemné</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://stream.radioservices.sk:8001/jemne-hi.mp3</div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Fun</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://stream.funradio.sk:8000/fun128.mp3">Rádio Fun</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://stream.funradio.sk:8000/fun128.mp3</div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Fun Dance</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://stream.funradio.sk:8000/dance128.mp3">Rádio Fun Dance</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://stream.funradio.sk:8000/dance128.mp3</div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Fun československé</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://stream.funradio.sk:8000/cs128.mp3">Rádio Fun československé</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://stream.funradio.sk:8000/cs128.mp3</div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Fun 80-90</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://stream.funradio.sk:8000/80-90-128.mp3">Rádio Fun 80-90</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://stream.funradio.sk:8000/80-90-128.mp3</div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Best FM</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://stream.bestfm.sk:80/128.mp3">Rádio Best FM</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://stream.bestfm.sk:80/128.mp3</div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Antena Rock</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://stream.radioservices.sk:8002/antena-hi.mp3">Rádio Antena Rock</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://stream.radioservices.sk:8002/antena-hi.mp3</div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Sity</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://icecast.radiosity.sk:8000/hq.mp3">Rádio Sity</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://icecast.radiosity.sk:8000/hq.mp3</div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Sky</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="http://stream.skyradio.sk:8000/sky128">Rádio Sky</button> - <button>Zastav</button></div>
    <div class="panel-footer">http://stream.skyradio.sk:8000/sky128</div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Rádio Expres</div>
    <div class="panel-body">Klikni a spusť <button class="input_id" name="input_ida" value="">Rádio Expres</button> - <button>Zastav</button></div>
    <div class="panel-footer">-</div>
  </div>
</div>

</form>

</p>

</div>

  <script>
  function checkvalue(input , Write) {
  var inputValue = document.getElementById(input).value;
  if(inputValue !="" && inputValue !=null) { 
    document.getElementById(Write).innerHTML = inputValue;
  } else { 
    document.getElementById(Write).innerHTML = "http://live.slovakradio.sk:8000/Slovensko_128.mp3";
  }
  }
  </script>

</body>
</html>
