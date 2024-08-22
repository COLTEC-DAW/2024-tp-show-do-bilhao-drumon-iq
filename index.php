<!DOCTYPE html>
<html lang="br">
<head>
    <title>CheatSheet</title>
</head>
<body>
    <?php
        include 'quiz.php';
	echo "penis";

	for ( $i = 0; $i<5; $i++)
	{
		echo "potato";
		foreach($alternativas_quiz[$i] as $perg => $alter)
		{
			echo "hello";
			echo "$alter";
		}
	}
    ?>
</body>
</html>
