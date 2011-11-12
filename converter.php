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

if (isset($_POST["convert"]))
{
    if ($_POST["from"] == $_POST["to"])
    {
        $result = $_POST["quantity"];
    }
    elseif ($equivalence = $equivalences[$_POST["from"].$_POST["to"]])
    {
        $result = $_POST["quantity"] * $equivalence;
    }
    elseif ($equivalence = $equivalences[$_POST["to"].$_POST["from"]])
    {
        $result = $_POST["quantity"] * (1 / $equivalence);
    }
}
