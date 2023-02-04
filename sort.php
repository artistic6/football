<?php

$inFile = __DIR__ . DIRECTORY_SEPARATOR . "nope.php";

$inData = include($inFile);
sort($inData);

$outText = "<?php\n";
$outText .= "return [\n";
foreach($inData as $inTeam){
    $outText .= "\t\"$inTeam\",\n";
}
$outText .= "];\n";

file_put_contents($inFile, $outText);