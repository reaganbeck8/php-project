<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz Yourself!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>


<?php 


$Questions = array(

    1 => array(

        'Question' => 'As of 2018, the five tallest buildings in the United States are all located in New York and which other city?',

        'Answers' => array(

            'A' => 'Chicago',

            'B' => 'New York',

            'C' => 'California',

            'D' => 'Oklahoma'

        ),

        'CorrectAnswer' => 'A'

    ),

    2 => array(

        'Question' => 'Which planet spins fastest?',

        'Answers' => array(

            'A' => 'Jupiter',

            'B' => 'Pluto',

            'C' => 'Other',

            'D' => 'Earth'

        ),

        'CorrectAnswer' => 'A'

    )

    3 => array(

        'Question' => 'Which British actor played Loki in Avengers Assemble and Jonathan Pine in The Night Manager?',

        'Answers' => array(

            'A' => 'George Benson',

            'B' => 'Tom Cruise',

            'C' => 'Tom Ford',

            'D' => 'Tom Hiddleston'

        ),

        'CorrectAnswer' => 'D'

    )

    2 => array(

        'Question' => 'Who was the Greek goddess of Love and Beauty?',

        'Answers' => array(

            'A' => 'Apollo',

            'B' => 'Athena',

            'C' => 'Aphrodite',

            'D' => 'Zeus'

        ),

        'CorrectAnswer' => 'A'

    )

    2 => array(

        'Question' => 'Which planet spins fastest?',

        'Answers' => array(

            'A' => 'Jupiter',

            'B' => 'Pluto',

            'C' => 'Other',

            'D' => 'Earth'

        ),

        'CorrectAnswer' => 'A'

    )

    2 => array(

        'Question' => 'Which planet spins fastest?',

        'Answers' => array(

            'A' => 'Jupiter',

            'B' => 'Pluto',

            'C' => 'Other',

            'D' => 'Earth'

        ),

        'CorrectAnswer' => 'A'

    )

    2 => array(

        'Question' => 'Which planet spins fastest?',

        'Answers' => array(

            'A' => 'Jupiter',

            'B' => 'Pluto',

            'C' => 'Other',

            'D' => 'Earth'

        ),

        'CorrectAnswer' => 'A'

    )

    2 => array(

        'Question' => 'Which planet spins fastest?',

        'Answers' => array(

            'A' => 'Jupiter',

            'B' => 'Pluto',

            'C' => 'Other',

            'D' => 'Earth'

        ),

        'CorrectAnswer' => 'A'

    )

    2 => array(

        'Question' => 'Which planet spins fastest?',

        'Answers' => array(

            'A' => 'Jupiter',

            'B' => 'Pluto',

            'C' => 'Other',

            'D' => 'Earth'

        ),

        'CorrectAnswer' => 'A'

    )

    2 => array(

        'Question' => 'Which planet spins fastest?',

        'Answers' => array(

            'A' => 'Jupiter',

            'B' => 'Pluto',

            'C' => 'Other',

            'D' => 'Earth'

        ),

        'CorrectAnswer' => 'A'

    )

    2 => array(

        'Question' => 'Which planet spins fastest?',

        'Answers' => array(

            'A' => 'Jupiter',

            'B' => 'Pluto',

            'C' => 'Other',

            'D' => 'Earth'

        ),

        'CorrectAnswer' => 'A'

    )

    2 => array(

        'Question' => 'Which planet spins fastest?',

        'Answers' => array(

            'A' => 'Jupiter',

            'B' => 'Pluto',

            'C' => 'Other',

            'D' => 'Earth'

        ),

        'CorrectAnswer' => 'A'

    )

    2 => array(

        'Question' => 'Which planet spins fastest?',

        'Answers' => array(

            'A' => 'Jupiter',

            'B' => 'Pluto',

            'C' => 'Other',

            'D' => 'Earth'

        ),

        'CorrectAnswer' => 'A'

    )

    2 => array(

        'Question' => 'Which planet spins fastest?',

        'Answers' => array(

            'A' => 'Jupiter',

            'B' => 'Pluto',

            'C' => 'Other',

            'D' => 'Earth'

        ),

        'CorrectAnswer' => 'A'

    )

    2 => array(

        'Question' => 'Which planet spins fastest?',

        'Answers' => array(

            'A' => 'Jupiter',

            'B' => 'Pluto',

            'C' => 'Other',

            'D' => 'Earth'

        ),

        'CorrectAnswer' => 'A'

    )

    2 => array(

        'Question' => 'Which planet spins fastest?',

        'Answers' => array(

            'A' => 'Jupiter',

            'B' => 'Pluto',

            'C' => 'Other',

            'D' => 'Earth'

        ),

        'CorrectAnswer' => 'A'

    )

    2 => array(

        'Question' => 'Which planet spins fastest?',

        'Answers' => array(

            'A' => 'Jupiter',

            'B' => 'Pluto',

            'C' => 'Other',

            'D' => 'Earth'

        ),

        'CorrectAnswer' => 'A'

    )

    2 => array(

        'Question' => 'Which planet spins fastest?',

        'Answers' => array(

            'A' => 'Jupiter',

            'B' => 'Pluto',

            'C' => 'Other',

            'D' => 'Earth'

        ),

        'CorrectAnswer' => 'A'

    )

    2 => array(

        'Question' => 'Which planet spins fastest?',

        'Answers' => array(

            'A' => 'Jupiter',

            'B' => 'Pluto',

            'C' => 'Other',

            'D' => 'Earth'

        ),

        'CorrectAnswer' => 'A'

    )

    2 => array(

        'Question' => 'Which planet spins fastest?',

        'Answers' => array(

            'A' => 'Jupiter',

            'B' => 'Pluto',

            'C' => 'Other',

            'D' => 'Earth'

        ),

        'CorrectAnswer' => 'A'

    )

);


if (isset($_POST['answers'])){

    $Answers = $_POST['answers']; 


  


    foreach ($Questions as $QuestionNo => $Value){

      

        echo $Value['Question'].'<br />';


        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']){

            echo '<span style="color: red;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; 

        } else {

            echo '<span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; 

        }

        echo '<br /><hr>';

    }

} else {

?>

    <form action="index.php" method="post" id="quiz">

    <?php foreach ($Questions as $QuestionNo => $Value){ ?>

    <li>

        <h3><?php echo $Value['Question']; ?></h3>

        <?php 

            foreach ($Value['Answers'] as $Letter => $Answer){ 

            $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;

        ?>

        <div>

            <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />

            <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>

        </div>

        <?php } ?>

    </li>

    <?php } ?>

    <input type="submit" value="Submit Quiz" />

    </form>

<?php 

}

?>
</body>
</html>