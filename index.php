<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz Yourself!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
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

    ),

    3 => array(

        'Question' => 'Which British actor played Loki in Avengers Assemble and Jonathan Pine in The Night Manager?',

        'Answers' => array(

            'A' => 'George Benson',

            'B' => 'Tom Cruise',

            'C' => 'Tom Ford',

            'D' => 'Tom Hiddleston'

        ),

        'CorrectAnswer' => 'D'

    ),

    4 => array(

        'Question' => 'Who was the Greek goddess of Love and Beauty?',

        'Answers' => array(

            'A' => 'Apollo',

            'B' => 'Athena',

            'C' => 'Aphrodite',

            'D' => 'Zeus'

        ),

        'CorrectAnswer' => 'A'

    ),

    5 => array(

        'Question' => 'The Pulitzer Prize is best associated with which profession?',

        'Answers' => array(

            'A' => 'Archeology',

            'B' => 'Astronomy',

            'C' => 'Journalism',

            'D' => 'Medicine'

        ),

        'CorrectAnswer' => 'C'

    ),

    6 => array(

        'Question' => 'Which English striker scored six goals at the 2018 World Cup Finals?',

        'Answers' => array(

            'A' => 'David Beckham',

            'B' => 'Harry Kane',

            'C' => 'Wayne Rooney',

            'D' => 'Alex Marshall '

        ),

        'CorrectAnswer' => 'B'

    ),

    7 => array(

        'Question' => 'Which US President declared: "Ask not what your country can do for you; ask what you can do for your country?',

        'Answers' => array(

            'A' => 'John F Kennedy',

            'B' => 'Abraham Lincoln',

            'C' => 'Barack Obama',

            'D' => 'Donald Trump'

        ),

        'CorrectAnswer' => 'A'

    ),

    8 => array(

        'Question' => 'Former Russian double agent Sergei Skripal and daughter Yulia were poisoned by which substance?',

        'Answers' => array(

            'A' => 'VX (a nerve agent)',

            'B' => 'Novichok (a nerve agent)',

            'C' => 'Doom (bug repellent)',

            'D' => 'Sarun (a nerve agent)'

        ),

        'CorrectAnswer' => 'B'

    ),

    9 => array(

        'Question' => 'The Supreme Court of which asian country de-criminalised homosexuality in September?',

        'Answers' => array(

            'A' => 'South Africa',

            'B' => 'North Korea',

            'C' => 'China',

            'D' => 'India'

        ),

        'CorrectAnswer' => 'D'

    ),

    10 => array(

        'Question' => 'The separatist group ETA announced its dissolution after 40 years of conflict and more than 800 deaths in which country?',

        'Answers' => array(

            'A' => 'Spain',

            'B' => 'Austria',

            'C' => 'Russia',

            'D' => 'Sydney'

        ),

        'CorrectAnswer' => 'A'

    ),

    11 => array(

        'Question' => 'Which company launched its rocket, the Falcon Heavy, on its maiden flight?',

        'Answers' => array(

            'A' => 'PPC',

            'B' => 'ZuluX',

            'C' => 'SpaceX',

            'D' => 'MarsX'

        ),

        'CorrectAnswer' => 'C'

    ),

    12 => array(

        'Question' => 'Cinemas open in Saudi Arabia for the first time since 1983, but which was the first film to be shown?',

        'Answers' => array(

            'A' => 'Black Panther',

            'B' => 'Wonder Woman',

            'C' => 'Spiderman Homecoming',

            'D' => 'Venom'

        ),

        'CorrectAnswer' => 'A'

    ),

    13 => array(

        'Question' => 'Which tennis playing sister is oldest; Venus or Serena Williams?',

        'Answers' => array(

            'A' => 'Pumlani Williams',

            'B' => 'Venus Wiliams',

            'C' => 'Serena Williiams',

            'D' => 'Venus Williams'

        ),

        'CorrectAnswer' => 'D'

    ),

    14 => array(

        'Question' => 'William Railton is best known as the designer of which London monument?',

        'Answers' => array(

            'A' => 'London Pride',

            'B' => "Nelson's Column",

            'C' => 'Battle of Britannia Monument',

            'D' => 'The Versaille'

        ),

        'CorrectAnswer' => 'B'

    ),

    15 => array(

        'Question' => "Which Formula 1 racing team is known as 'The Prancing Horse'?",

        'Answers' => array(

            'A' => 'Lamborghini',

            'B' => 'Suzuki',

            'C' => 'All of the above',

            'D' => 'Ferrari'

        ),

        'CorrectAnswer' => 'D'

    ),

    16 => array(

        'Question' => "The phrase 'Eddie Ate Dynamite, Good Bye Eddie' is a Mnemonic for helping to remember how to play which instrument?",

        'Answers' => array(

            'A' => 'Piano',

            'B' => 'Guitar',

            'C' => 'Drums',

            'D' => 'Sitar'

        ),

        'CorrectAnswer' => 'B'

    ),

    17 => array(

        'Question' => 'Marais, the Latin Quarter and Saint Germain are areas within which European captial city?',

        'Answers' => array(

            'A' => 'Luxemborg',

            'B' => 'Paris',

            'C' => 'Berlin',

            'D' => 'Barça'

        ),

        'CorrectAnswer' => 'B'

    ),

    18 => array(

        'Question' => 'Which is the third sign of the Zodiac to be associated with water, the other two being Pisces and Cancer?',

        'Answers' => array(

            'A' => 'Leo',

            'B' => 'Taurus',

            'C' => 'Pisces',

            'D' => 'Scorpio'

        ),

        'CorrectAnswer' => 'D'

    ),

    19 => array(

        'Question' => 'Which US comedian became the first person since Billy Crystal to host two Academy Award ceremonies in consecutive years in 2018?',

        'Answers' => array(

            'A' => 'Jimmy Kimmel',

            'B' => 'Trevor Noah',

            'C' => 'Kevin Hart',

            'D' => 'Chris Rock'

        ),

        'CorrectAnswer' => 'A'

    ),

    20 => array(

        'Question' => 'Businessman Jack Ma founded which Chinese e-commerce company in 1999?',

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


  


    foreach ($Questions as $QuestionNo => $Value){

      

        echo $Value['Question'].'<br />';

    
        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']){
                
        echo '<span style="color: red;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; 

        } else {

            $total++;  

        }

        echo '<br /><hr>';
      

    }
    echo "You got $total /20";
    echo " ";
        if ($total <= 10) {
            echo "You suck!, Try Again!";
        };
        if ($total <= 15) {
            echo "You scored average results!";
        };
        if ($total > 15) {
            echo "Excellent! Are you perhaps related to Einstein?";
        };

} else {

?>

    <form action="index.php" method="post" id="quiz">

<section class="hero is-success is-fullheight is-bold" id="particles-js">
    <article class="hero-body is-primary ">
        <h2 class="title is-1">Quiz Yourself!</h2>
    </article>
</section>
    <?php foreach ($Questions as $QuestionNo => $Value){ ?>

   

    <li class="box">

        <h3 class=""><?php echo $Value['Question']; ?></h3>

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

    <input type="submit" value="Submit Quiz" class="button is-success is-normal is-hovered"/>
 
    </form>

<?php 

}

   

?>
    </body>
</html>