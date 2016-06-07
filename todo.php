<?php




$text = file_get_contents('todo.csv');

class Game
{
    public function __construct($text)
    {

    }
    public function categorize($text)
    {
        $games = explode("\n", $text);

        return $games;
    }
    public function displaytbl($array, $columns)
    {

        echo "<table border=1>";
        echo "<tr>";

        foreach ($columns as $column) {
            echo "<th>$column</th>";
        }
        echo "</tr>";


        foreach ($array as $game) {
            $gdetails = explode(",", $game);
            echo "<tr>";
        foreach ($gdetails as $details){

        echo "<td>$details</td>";
        }
        echo "</tr>";

        }
        echo "</table>";
    }
}

$g = new Game($text);
$g->displaytbl($g->categorize($text), ['#','Title','Details']);

