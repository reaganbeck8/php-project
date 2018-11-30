<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz Yourself!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" href="css/styles.css">
    <script src="main.js"></script>
</head>
<body>


<?php 

// This multi-dimensional array that contains all the qustions and answers to the quiz
$Questions = array(

    1 => array( 'Question' => 'As of 2018, the five tallest buildings in the United States are all located in New York and which other city?',

        'Answers' => array(

            'A' => 'Chicago',

            'B' => 'New York',

            'C' => 'California',

            'D' => 'Oklahoma'

        ),

        'CorrectAnswer' => 'A'

    ),

    2 => array( 'Question' => 'Which planet spins fastest?',

        'Answers' => array(

            'A' => 'Jupiter',

            'B' => 'Pluto',

            'C' => 'Other',

            'D' => 'Earth'

        ),

        'CorrectAnswer' => 'A'

    ),

    3 => array( 'Question' => 'Which British actor played Loki in Avengers Assemble and Jonathan Pine in The Night Manager?',

        'Answers' => array(

            'A' => 'George Benson',

            'B' => 'Tom Cruise',

            'C' => 'Tom Ford',

            'D' => 'Tom Hiddleston'

        ),

        'CorrectAnswer' => 'D'

    ),

    4 => array( 'Question' => 'Who was the Greek goddess of Love and Beauty?',

        'Answers' => array(

            'A' => 'Apollo',

            'B' => 'Athena',

            'C' => 'Aphrodite',

            'D' => 'Zeus'

        ),

        'CorrectAnswer' => 'C'

    ),

    5 => array( 'Question' => 'The Pulitzer Prize is best associated with which profession?',

        'Answers' => array(

            'A' => 'Archeology',

            'B' => 'Astronomy',

            'C' => 'Journalism',

            'D' => 'Medicine'

        ),

        'CorrectAnswer' => 'C'

    ),

    6 => array( 'Question' => 'Which English striker scored six goals at the 2018 World Cup Finals?',

        'Answers' => array(

            'A' => 'David Beckham',

            'B' => 'Harry Kane',

            'C' => 'Wayne Rooney',

            'D' => 'Alex Marshall '

        ),

        'CorrectAnswer' => 'B'

    ),

    7 => array( 'Question' => 'Which US President declared: "Ask not what your country can do for you; ask what you can do for your country?',

        'Answers' => array(

            'A' => 'John F Kennedy',

            'B' => 'Abraham Lincoln',

            'C' => 'Barack Obama',

            'D' => 'Donald Trump'

        ),

        'CorrectAnswer' => 'A'

    ),

    8 => array( 'Question' => 'Former Russian double agent Sergei Skripal and daughter Yulia were poisoned by which substance?',

        'Answers' => array(

            'A' => 'VX (a nerve agent)',

            'B' => 'Novichok (a nerve agent)',

            'C' => 'Doom (bug repellent)',

            'D' => 'Sarun (a nerve agent)'

        ),

        'CorrectAnswer' => 'B'

    ),

    9 => array( 'Question' => 'The Supreme Court of which asian country de-criminalised homosexuality in September?',

        'Answers' => array(

            'A' => 'South Africa',

            'B' => 'North Korea',

            'C' => 'China',

            'D' => 'India'

        ),

        'CorrectAnswer' => 'D'

    ),

    10 => array( 'Question' => 'The separatist group ETA announced its dissolution after 40 years of conflict and more than 800 deaths in which country?',

        'Answers' => array(

            'A' => 'Spain',

            'B' => 'Austria',

            'C' => 'Russia',

            'D' => 'Sydney'

        ),

        'CorrectAnswer' => 'A'

    ),

    11 => array( 'Question' => 'Which company launched its rocket, the Falcon Heavy, on its maiden flight?',

        'Answers' => array(

            'A' => 'PPC',

            'B' => 'ZuluX',

            'C' => 'SpaceX',

            'D' => 'MarsX'

        ),

        'CorrectAnswer' => 'C'

    ),

    12 => array( 'Question' => 'Cinemas open in Saudi Arabia for the first time since 1983, but which was the first film to be shown?',

        'Answers' => array(

            'A' => 'Black Panther',

            'B' => 'Wonder Woman',

            'C' => 'Spiderman Homecoming',

            'D' => 'Venom'

        ),

        'CorrectAnswer' => 'A'

    ),

    13 => array( 'Question' => 'Which tennis playing sister is oldest; Venus or Serena Williams?',

        'Answers' => array(

            'A' => 'Pumlani Williams',

            'B' => 'Venus Wiliams',

            'C' => 'Serena Williiams',

            'D' => 'Venus Williams'

        ),

        'CorrectAnswer' => 'D'

    ),

    14 => array( 'Question' => 'William Railton is best known as the designer of which London monument?',

        'Answers' => array(

            'A' => 'London Pride',

            'B' => "Nelson's Column",

            'C' => 'Battle of Britannia Monument',

            'D' => 'The Versaille'

        ),

        'CorrectAnswer' => 'B'

    ),

    15 => array( 'Question' => "Which Formula 1 racing team is known as 'The Prancing Horse'?",

        'Answers' => array(

            'A' => 'Lamborghini',

            'B' => 'Suzuki',

            'C' => 'All of the above',

            'D' => 'Ferrari'

        ),

        'CorrectAnswer' => 'D'

    ),

    16 => array( 'Question' => "The phrase 'Eddie Ate Dynamite, Good Bye Eddie' is a Mnemonic for helping to remember how to play which instrument?",

        'Answers' => array(

            'A' => 'Piano',

            'B' => 'Guitar',

            'C' => 'Drums',

            'D' => 'Sitar'

        ),

        'CorrectAnswer' => 'B'

    ),

    17 => array( 'Question' => 'Marais, the Latin Quarter and Saint Germain are areas within which European captial city?',

        'Answers' => array(

            'A' => 'Luxemborg',

            'B' => 'Paris',

            'C' => 'Berlin',

            'D' => 'Barça'

        ),

        'CorrectAnswer' => 'B'

    ),

    18 => array( 'Question' => 'Which is the third sign of the Zodiac to be associated with water, the other two being Pisces and Cancer?',

        'Answers' => array(

            'A' => 'Leo',

            'B' => 'Taurus',

            'C' => 'Pisces',

            'D' => 'Scorpio'

        ),

        'CorrectAnswer' => 'D'

    ),

    19 => array( 'Question' => 'Which US comedian became the first person since Billy Crystal to host two Academy Award ceremonies in consecutive years in 2018?',

        'Answers' => array(

            'A' => 'Jimmy Kimmel',

            'B' => 'Trevor Noah',

            'C' => 'Kevin Hart',

            'D' => 'Chris Rock'

        ),

        'CorrectAnswer' => 'A'

    ),

    20 => array( 'Question' => 'Businessman Jack Ma founded which Chinese e-commerce company in 1999?',

        'Answers' => array(

            'A' => 'Samsung',

            'B' => 'Huawei',

            'C' => 'Alibaba',

            'D' => 'ZTE'

        ),

        'CorrectAnswer' => 'C'

    )

);

$total = 0;
if (isset($_POST['answers'])){

    $Answers = $_POST['answers']; 


  

//This loop checks the answer to see if it is correct, if it is correct then the total will incremented by one

    foreach ($Questions as $QuestionNumber => $Value){
        
        if ($Answers[$QuestionNumber] != $Value['CorrectAnswer']){
                
            $total = $total;

        } else {

            $total++;  

        }

    }

//Once your quiz has been submitted, the conditional statements will respond according to your result    
    echo "You got $total /20";
    echo "<br/>";
    echo "<br/>";
        if ($total <= 10) {
            echo "<p>You should try harder next time :( </p>
            </br>";
            echo '<img src="images/goldfish.jpg" />';
        }; 
        if ($total > 10 && $total < 15) {
            echo "<p>You scored average results!</p>";
            echo '<img src="images/average.jfif" />';
        };
        if ($total > 15) {
            echo "<p>Excellent! Are you perhaps related to Einstein?</p>";
            echo '<img src="images/einstein.gif" />';
        };

} else {

// The form starts here, the questions and possible answers are displayed one by one using a foreach loop
?>

</section>
<!-- This is where the landing page of the form starts-->

    <form action="index.php" method="post" id="quiz" class="form">

        <section class="hero is-fullheight is-bold">

            <div class="hero-body">
                <h1 class="title" id="background">General Knowlege Quiz!</h1>
            </div>
        
        </section>

    <br>

    <?php
    // This foreach loop outputs each question as well as the four possible answers to the questions through the use of radio buttons

        foreach ($Questions as $QuestionNumber => $Value){ 
              
    ?>
<!-- This is where the questions and possible answers are marked up and within the markup there is script that allows it to interact with the backend foreach loop -->
<div class="container">

    <li class="box">

        <h3 class=""><?php echo $Value['Question']; ?></h3>

        <?php 
// This is saying that for each of the values of the possible answers that it should assign a letter to it as it was written within the arrays\
// [This is not displayed to the user, but runs in the backend for the purpose of outputting all the possible answers]

            foreach ($Value['Answers'] as $Letter => $Answer){ 

            $Label = 'question-'.$QuestionNumber.'-answers-'.$Letter;

        ?>

        <div>
<!-- Radio button with the relevent naming conventions and integration of php with name and value's as well as id's -->

            <input type="radio" name="answers[<?php echo $QuestionNumber; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" required/>
<!-- A label gets created that contains a letter as well as a possible answer [This is what is displayed to the user] -->
            <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>

        </div>

        <?php } ?>

    </li>

    <?php } ?>
<!-- This is my submit button -->

    <input type="submit" value="Submit Quiz" class="button is-success is-normal is-hovered"/>
    <br>
    <br>
    <br>
    </form>
    
<?php 

}

?>

        </div>
    </body>
</html>