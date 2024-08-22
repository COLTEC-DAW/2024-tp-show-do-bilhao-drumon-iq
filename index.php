<!DOCTYPE html>
<html lang="br">
<head>
    <title>CheatSheet</title>
</head>
<body>
    <h1> Gabarito do Show do Bilhão </h1>
    <?php
        include 'quiz.php';

        for ( $i = 0; $i<5; $i++)
	{
	    echo "<h3>$enunciado_quiz[$i]</h3>";
	    echo "<br>";

	    $abcde = array('a','b','c','d','e');
	    $current_abcde = 0;

	    foreach($alternativas_quiz[$i] as $perg => $alter)
	    {

		echo "$abcde[$current_abcde]. $alter <br>";
		$current_abcde++;
	    }

	    echo "<hr>";
	}
    ?>
</body>
</html>
