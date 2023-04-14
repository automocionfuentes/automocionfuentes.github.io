<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" dir="ltr">
<head>
	<title><strong>Encontrado</strong> para</title>

	<!-- Contents -->
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Language" content="es" />
	<meta http-equiv="last-modified" content="12/12/2011 13:21:35" />
	<meta http-equiv="Content-Type-Script" content="text/javascript" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- imCustomHead -->
	<meta http-equiv="Expires" content="0" />
	<meta name="Resource-Type" content="document" />
	<meta name="Distribution" content="global" />
	<meta name="Robots" content="index, follow" />
	<meta name="Revisit-After" content="21 days" />
	<meta name="Rating" content="general" />
	<!-- Others -->
	<meta name="Generator" content="Incomedia WebSite X5 Evolution Evolution 8.0.6 - www.websitex5.com" />
	<meta http-equiv="ImageToolbar" content="False" />
	<meta name="MSSmartTagsPreventParsing" content="True" />
	
	<!-- Parent -->
	<link rel="sitemap" href="imsitemap.html" title="Mapa general del sitio" />
	<!-- Res -->
	<script type="text/javascript" src="res/x5engine.js"></script>
	<link rel="stylesheet" type="text/css" href="res/styles.css" media="screen, print" />
	<link rel="stylesheet" type="text/css" href="res/template.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="res/print.css" media="print" />
	<!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="res/iebehavior.css" media="screen" /><![endif]-->
	
	<link rel="stylesheet" type="text/css" href="res/handheld.css" media="handheld" />
	<link rel="alternate stylesheet" title="Alto contraste - Accesibilidad" type="text/css" href="res/accessibility.css" media="screen" />

</head>
<body>
<div id="imSite">
<div id="imHeader">
	
	<h1>mecanica fuentes</h1>
<div id="imMEObj_20" style="left: 654px; top: 7px; width: 187px; height: 83px;" onclick="imOpenLocation('http://www.ventaweb.es')" ></div>
<div id="imMEObj_40" style="left: 397px; top: 2px; width: 220px; height: 197px;" ><script type="text/javascript">imMESSPlay(40,0,[["me_ss40.png",16,3],["me_ss41.png",16,3],["me_ss42.png",16,3],["me_ss43.png",16,3],["me_ss44.png",16,3]]);</script></div>
<div style="left: 700px; top: 141px; width: 205px; height: 21px; "><form id="imSearch_05" action="imsearch.php" method="get" style="white-space: nowrap"><fieldset><input type="text" name="search" value="" style="width: 126px; font: 11px Tahoma; color: #000000; background: #FFFFFF url('res/imsearch.gif') no-repeat 3px; padding: 3px 3px 3px 21px; border: 1px solid #000000; vertical-align: middle" /> <span style="font: 11px Tahoma; color: #000000; background-color: #C0C0C0; padding: 3px 6px 3px 6px; border: 1px solid #000000; vertical-align: middle; cursor: pointer; "
onclick="imGetLayer('imSearch_05').submit();" >Buscar</span>
</fieldset></form></div>
</div>
<div class="imInvisible">
<hr />
<a href="#imGoToCont" title="Saltar el menú principal">Ir al Contenido</a>
</div>
<div id="imBody">
	<div id="imMenuMain">

<!-- Menu START -->
<a name="imGoToMenu"></a><p class="imInvisible">Menú Principal:</p>
<div id="imMnMn">
<ul>
	<li><a class="imMnItm_1" href="index.html" title=""><span class="imHidden">Automoción Fuentes</span></a></li>
	<li><a class="imMnItm_2" href="escaparate.html" title=""><span class="imHidden">Escaparate</span></a></li>
	<li><a class="imMnItm_3" href="promociones.html" title=""><span class="imHidden">Promociones</span></a></li>
	<li><a class="imMnItm_4" href="contacto.html" title=""><span class="imHidden">Contacto</span></a></li>
</ul>
</div>
<!-- Menu END -->

	</div>
<hr class="imInvisible" />
<a name="imGoToCont"></a>
	<div id="imContent">
<div id="imSText">
<?php
	$domain = "";
	$search = $_GET['search'];
	$page = $_GET['page'];
	if($page == "")
		$page = 0;
	else
		$page--;
	if($search != "") {
		$queries = explode(" ",$search);
		$dir = opendir(getcwd());
		while(($f = readdir($dir)) !== false)
			if(substr($f,strlen($f)-4) == "html" && $f != "imcart.html" && $f != "imlist.html" && $f != "imform.html" && $f != "imreport.html" && $f != "impayment.html" && $f != "imsitemap.html")
				$files[] = $f;
		closedir($dir);
		foreach($files as $filename) {
			$count = 0;
			$weight = 0;
			$file_content = implode("\n",file($filename));
			$starttitle = strpos($file_content,"<title>") + 7;
			$endtitle = strpos($file_content,"</title>");
			if(($starttitle != false) && ($endtitle != false)) {
				foreach($queries as $query) {
					$title = substr($file_content,$starttitle,$endtitle-$starttitle);
					while (($title = stristr($title, $query)) !== false) {
						$weight += 4;
						$title = substr($title,strlen($query));
					}
				}
			}
			$page_pos = strpos($file_content,"<!-- Page START -->")+19;
			$page_end = strpos($file_content,"<!-- Page END -->");
			if($page_pos != false && $page_end != false)
				$file_content = substr($file_content,$page_pos, $page_end-$page_pos);
			$file_content = strip_tags($file_content);
			foreach($queries as $query) {
				$file = $file_content;
				while (($file = stristr($file, $query)) !== false) {
					$count++;
					$weight++;
					$file = substr($file,strlen($query));
				}
			}
			if($count > 0) {
				$found_count[$filename] = $count;
				$found_weight[$filename] = $weight;
			}
		}
		
		if($found_count != null) {
			arsort($found_weight);
			$i = 0;
			$pagine = ceil(count($found_count)/10);
			if(($page >= $pagine) || ($page < 0))
				$page = 0;
			echo "		<div class=\"imSLabel\"><div id=\"imSPageTitle\"><strong>Encontrado</strong> para <i>". $search ."</i></div><strong>" . ($page*10+1) . "-" . (count($found_count)<($page+1)*10? count($found_count):($page+1)*10) . "</strong> para <strong>"  . count($found_count) . "</strong></div>\n";
			foreach($found_weight as $name => $weight) {
				$count = $found_count[$name];
				$i++;
				if(($i > $page*10) && ($i <= ($page+1)*10)) {
					$file = implode(" ",file($name));
					$starttitle = strpos($file,"<title>") + 7;
					$endtitle = strpos($file,"</title>");
					if(($starttitle != false) && ($endtitle != false))
						$title = substr($file,$starttitle,$endtitle-$starttitle);
					else
						$title = $name;
					$page_pos = strpos($file,"<!-- Page START -->")+19;
					$page_end = strpos($file,"<!-- Page END -->");
					if($page_pos != false && $page_end != false)
						$file = substr($file,$page_pos, $page_end-$page_pos);
					$file = strip_tags($file);
					$ap = 0;
					$filelen = strlen($file);
					$text = "";
					for($j=0;$j<($count > 6 ? 6 : $count);$j++) {
						$minpos = $filelen;
						foreach($queries as $query) {
							if(($pos = strpos(strtoupper($file),strtoupper($query),$ap)) !== false) {
								if($pos < $minpos) {
									$minpos = $pos;
									$word = $query;
								}
							}
						}
						$prev = explode(" ",substr($file,$ap,$minpos-$ap));
						if(count($prev) > ($ap > 0 ? 9 : 8))
							$prev = ($ap > 0 ? implode(" ",array_slice($prev,0,8)) : "") . " ... " . implode(" ",array_slice($prev,-8));
						else
							$prev = implode(" ",$prev);
						$text .= $prev . "<strong>" . substr($file,$minpos,strlen($word)) . "</strong> ";
						$ap = $minpos + strlen($word);
					}
					$next = explode(" ",substr($file,$ap));
					if(count($next) > 9)
						$text .= implode(" ",array_slice($next,0,8)) . "...";
					else
						$text .= implode(" ",$next);
					echo "			<div class=\"imSTitle\"><a href=\"" . $name . "\">" . $title . "</a> <span class=\"imSCount\">(" . $count . " " . ($count > 1 ? "Resultados" : "Resultado") . ")</span></div>" . $text . "<div class=\"imSLink\"><a href=\"" . $name . "\">" . $domain . $name . "</a></div>\n";
				}
			}
			echo "  <div class=\"imSLabel\">&nbsp;</div>\n";
			if ($pagine > 1) {
				echo "			Página ";
				for($i = 1; $i <= $pagine; $i++)
					if($i != $page+1)
						echo "<a href=\"imsearch.php?search=" . $search . "&page=" . $i . "\">" . $i . "</a> ";
					else
						echo "<strong>" . $i . "</strong> ";
				echo "</div>\n";
			}
		}
		else
			echo "  <div style=\"text-align: center; font-weight: bold; \"><strong>No encontrado</strong></div>\n";
	}
?>
</div>
<div id="imSBox">
<form action="imsearch.php" method="get"><fieldset>
	<input type="text" name="search" value="<?php echo $_GET['search']; ?>"/> <input id="imSButton" type="submit" value="Buscar" />
</fieldset></form>
</div>
<br />

	</div>
	<div id="imFooter">
	</div>
</div>
</div>
<div class="imInvisible">
<hr />
<a href="#imGoToCont" title="Leer esta página de nuevo">Regresar al contenido</a> | <a href="#imGoToMenu" title="Leer este sitio de nuevo">Regresar al menú principal</a>
</div>


<div id="imShowBoxBG" style="display: none;" onclick="imShowBoxHide()"></div>
<div id="imShowBoxContainer" style="display: none;" onclick="imShowBoxHide()"><div id="imShowBox" style="height: 200px; width: 200px;"></div></div>
<div id="imBGSound"></div>
<div id="imToolTip"><script type="text/javascript">var imt = new IMTip;</script></div>
<script type="text/javascript">imPreloadImages('res/immnu_01b.gif,res/immnu_02b.gif,res/immnu_03b.gif,res/immnu_04b.gif')</script>
</body>
</html>
