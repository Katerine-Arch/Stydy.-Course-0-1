<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SoftWalls - Мягкие панели </title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">

    </script>    
</head>
    
    <body>
    <div class="content">

            <?php
            include "menu.php";      
            ?>
        
        <div class-"contentWrap">
            
                <div class="center">
                    <h1>Генератор паролей.</h1>
                    
                        <div class="box">
                            
                            
                            <?php
                                echo _getpassword(10, array(0,1,2));
                            
                            function _getpassword($length, $lit) {
                            $array_pass_0 = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'v', 'x', 'y', 'z');
                            $array_pass_1 = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V', 'X', 'Y', 'Z');
                            $array_pass_2 = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
                            $passwd = "";
                            for ($rnd = 0; $rnd < $length; $rnd++) {         
                                $array_pass = ${'array_pass_'.$lit[mt_rand(0, count($lit)-1)]}; // выбираем случайный массив символов       
                                $random_pass = mt_rand(0, count($array_pass) - 1);  // выбираем случайный символ из массива символов        
                                $passwd .= $array_pass[$random_pass]; // приписываем к строке пароля один символ    
                            }       
                            return $passwd; 
                        }
                            
                            ?>
                            <form method="GET"> 

                                <input type="submit" value="Начать генерировать" name="">
                           </form>
                            
                            
                        </div>
                    
                    
                    
                </div>
            </div>
        </div>
  
    </body>
    
</html>    