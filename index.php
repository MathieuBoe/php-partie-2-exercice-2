<?php 
$title = 'Exercice2';
$isEasy = 'Bus'; 
?>
<? include 'header.php';?>
<?php
if ($isEasy == true)
{
    echo "C'est facile !!";
}
else 
{
    echo "C'est difficile";
}
?>
<h1>Bonus</h1>
<?=
$isEasy = Null;
if ($isEasy == true)
{
    echo "C'est facile !!";
}
else if ($isEasy == false)
{
    echo "C'est difficile !!";
}
?>
<?include 'footer.php';?>