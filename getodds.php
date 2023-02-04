<?php

$oddsJSON = file_get_contents("https://bet.hkjc.com/football/getJSON.aspx?jsontype=odds_had.aspx");

$odds = json_decode($oddsJSON, true);
if($odds == NULL) exit("ERROR!!!\n");

var_dump($odds); die();