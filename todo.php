<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
$text = file_get_contents('todo.csv');
$games = str_replace(PHP_EOL, "%", $text);
$games = explode("%", $games);
?>
<table border="1">
    <tr>
        <th class="cell">#</th>
        <th class="cell">Game</th>
        <th class="cell">Description</th>
    </tr>
</table>
<?php foreach ($games as $game):
    $gdetails = explode(",", $game);?>
<table border="1">
    <tr>
    <?php foreach ($gdetails as $details): ?>
        <td class="cell"><?php print_r($details);  ?></td>
    <?php endforeach; ?>
    </tr>
</table>
<?php endforeach; ?>





<!-- <table style="width:100%" border="1">

    <tr>
        <td><?php echo $games[0]; ?></td>
        <td><?php echo $games[1]; ?></td>
        <td><?php echo $games[2]; ?></td>
        <td><?php echo $games[3]; ?></td>
    </tr>
</table> -->

</body>
</html>
