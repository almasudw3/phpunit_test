<?php

require_once("libs/simplepie.php");
require_once("classes/importer.php");

$xmlData = file_get_contents("tests/fixtures/rss.xml");
echo "testing result";
echo "testing the automated integration on Staging and Development branches";
/*echo "testing the automated integration on Staging and Development branches";
echo "testing the automated integration on Staging and Development branches";*/
$objImporter = new Importer();
$arrArticles = $objImporter->importArticles($xmlData);
var_dump($arrArticles);

?>