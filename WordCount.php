<?php

$text = file_get_contents('alice.txt');
$n = 0;
class WordCount
{
public function __construct($file)
    {

    }
    public function display($text)
    {
        echo "<pre>";
        var_dump($text);
        echo "</pre>";
    }
    public function modstring($text, $command)
    {
        $text = strtolower($text);
        $text = str_replace("\n", " ", $text);
        $text = trim(preg_replace('/\s+/', " ", $text));
        $text = explode(" ", $text);
        $modtext = [];
        $modtext2 = [];
        foreach ($text as $word) {
            if(!array_key_exists($word, $modtext) && !strlen($word) < 1)
            {
                $modtext[$word] = 1;
            }
            else
            {
                ++$modtext[$word];
            }
        }

        $modtext2 = $modtext;
        arsort($modtext);
        ksort($modtext2);


        if($command == 1)
        {
            return $modtext;
        }
        else
        {
            return $modtext2;
        }


    }
}
$wc = new WordCount($text);
echo "Top 20 Words";
$wc->display(array_slice($wc->modstring($text , 1), 0, 20));
echo "Alphabetically Arranged";
$wc->display($wc->modstring($text , 2));



// $text = file_get_contents('alice.txt');
// $text = strtolower($text);

// $text = str_replace(",", "%", $text);
// $text = trim(preg_replace('/\s+/', ' ', $text));
// $text = str_replace(" ", ",", $text);
// $textarray = explode(",", $text);
// arsort($textarray);

// echo "<pre>";
// print_r(array_count_values($textarray));
// echo "</pre>";




?>