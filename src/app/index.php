<!DOCTYPE html>

<?php
    session_start();
  
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>
            Adventskalender
        </title>

        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    </head>
    <body>
        
        <header>
            <h1>
                Adventskalender
            </h1>
            <div class="flex-container-Ansicht">
                <div class="flex-row-Ansicht">
                    <form class="AnsichtW"action="#" method="post">
                        <input type="hidden" class="AnsichtWButton" name="AAnsicht" value="true"/> 
                        <input type="submit" class="AnsichtWButton" value="AAnsicht"/>
                    </form>
                    <form class="AnsichtW" action="#" method="post">
                        <input type="hidden" class="AnsichtWButton" name="AAnsicht" value="false"/> 
                        <input type="submit" class="AnsichtWButton" value="KAnsicht"/>    
                    </form>
                </div>
            </div>
        </header>
        <div class="flex-container">            

            <main>

                <?php
                    $ansicht = false;
                    $array = array("0");
                    if(isset($_POST['AAnsicht'])){
                        if($_POST['AAnsicht'] == 'true'){                
                            $ansicht = true;               
                        }else{                
                            $ansicht = false;                
                        }
                        if($ansicht){
                            for($i = 0; $i < 24; $i = $i + 6){
                                echo "<div class=\"flex-row\">";
                                for($j = 1; $j < 7; $j = $j + 1){
                                    $numberInArray = false;
                                    $max = count($array);
                                    while(true){
                                        $random = rand(1,24);                           
                                        for($x = 0; $x < $max; $x++){
                                            if(intval($array[$x]) == $random ){
                                                $numberInArray = true;
                                            }
                                        }
                                        if(!$numberInArray){
                                            break;
                                        }
                                    }
                                    echo"
                                        <div class=\"flex-box\" >
                                            <div class=\"door ".($random)."\">
                                                <span  id=\"s".($random)."\" >".($random)."</span>
                                                <img  id=\"p".($random)."\"src=\"https://www.stadtfeuerwehr-georgsmarienhuette.de/fileadmin/dateien/_processed_/3/a/csm_Tannenbaum_75c52f48af.jpg\">
                                            </div>                       
                                        </div>
                                    ";
                                }
                                echo "</div>";
                            }               
                        }else{
                            echo"<p> test</p>";
                        }
                    }
                ?>

           </main>

        </div>

        <footer>

        </footer>
        

        <script src="dommanipulation.js"></script>   
    </body>
</html>

<?php
    session_destroy();
?>
