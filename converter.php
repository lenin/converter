<?php

$units = array(
    "m" => "metre",
    "f" => "foot",
    "i" => "inch"
);

$equivalences = array(
    "fm" => 0.3048,
    "fi" => 12
);

$quantity = "";
$from = "";
$to = "";
$result = "";

if (isset($_POST["convert"]))
{
    $quantity = $_POST["quantity"];
    $from = $_POST["from"];
    $to = $_POST["to"];

    if ($from == $to)
    {
        $result = $quantity;
    }
    elseif ($equivalence = $equivalences[$from.$to])
    {
        $result = $quantity * $equivalence;
    }
    elseif ($equivalence = $equivalences[$to.$from])
    {
        $result = $quantity * (1 / $equivalence);
    }
}
