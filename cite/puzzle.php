<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SoftWalls - Мягкие панели </title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        
        var score = 0;
        
        function checkAnswer(inputId, answers){
            var userAnswer = document.getElementById(inputId).value;
            userAnswer = userAnswer.toLowerCase();
            for(var i=0; i < answers.length; i++){
                if(userAnswer == answers[i]){
                    score++;
                    break;
                }
            }
        }
        
        function checkAnswers(){
            checkAnswer("userAnswer1", ["синичка", "sinichka"])
            checkAnswer("userAnswer2", ["носорог", "nosorog"])
            checkAnswer("userAnswer3", ["скворец", "scvorets"])
            
            alert("Вы отгадали " + score + " загадок.");
        }
        
    </script>    
</head>
    
    <body>
    <div class="content">

            <?php
            include "menu.php";      
            ?>
        
        <div class-"contentWrap">
          
                <div class="center">
                    <h1>Игра: загадки.</h1>
                    
                        <div class="box">
                            
                            
                    <?php
                            
                        if(isset($_GET["userAnswer1"])  &&   isset($_GET["userAnswer2"]) &&   isset($_GET["userAnswer3"])){
                            
                                            
                                $userAnswer = $_GET["userAnswer1"];
                                $score = 0;
                                    if($userAnswer == "синичка" || $userAnswer == "sinichka"){
                                       $score++; 
                                    }

                                $userAnswer = $_GET["userAnswer2"];
                                    if($userAnswer == "носорог" || $userAnswer == "nosorog"){
                                       $score++; 
                                    }

                                $userAnswer = $_GET["userAnswer3"];
                                    if($userAnswer == "скворец" || $userAnswer == "scvorets"){
                                       $score++; 
                                    }

                                echo "Вы угадали: " . $score . " загадок.";
                        }
                    ?>
                            
                            
                            
                          <form method="GET">    
                                <p>Маленькая птичка. Как зовут её?</p>
                                <input type="text" name="userAnswer1">

                                <p>Кто один имеет рог? Отгадайте!</p>
                                <input type="text" name="userAnswer2">

                                <p>Прилетел весной певец. Подскажите, кто?</p>
                                <input type="text" name="userAnswer3">

                                <br>
                                <input type="submit" value="Ответить" name="">
                           </form>   
                            
                        </div>
                    
                    
                    
                </div>
            </div>
        </div>
   
    </body>
    
</html>    