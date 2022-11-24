<?php require("blocks/header.php"); ?>
    
    <main>
        <section>
        <div class="content">
            <img src="img/function.png" alt=""><br>
        

        <?php 
            $x = -10;
            $encounting = 30;
            $step = 2;
            $type = 'B';
            
            $min_value = 10;
            $max_value = 20;
            $sum = 0;
            $f_mean = 0;
            $max_value_func = -200;
            $min_value_func = 200;


            if ($type == 'B') {
                echo '<ul>';
            }
            if ($type == 'C') {
                echo '<ol>';
            }
            if ($type == 'D') {
                echo '<table class="func_table" border=1"><tr><th>N</th><th>Аргумент</th><th>Значение функции</th></tr>';
            }
            if ($type == 'E') {
                echo '<div class="block_func">';
            }
            

            
            $i = 0;
            $f = 0;
            while ($i < $encounting && ($f >= $max_value || $f <= $min_value)) {

                if ($x <= 10){
                    $f = 10*$x - 5;
                }
                else if ($x < 20){
                    $f = ($x + 3) * $x*$x;
                }
                else {
                    if ($x - 25 == 0){ 
                        $f = 'error';
                    }
                    else {
                        $f = 3 / ($x - 25);
                    }
                }

                if ($f > $max_value_func) {
                    $max_value_func = $f;
                }

                if ($f < $min_value_func) {
                    $min_value_func = $f;
                }

                if ($type == 'A') { 
                    echo 'f('.$x.')='.$f.'<br>';
                    // if ($i < $encounting - 1) {
                    //     echo '<br>';
                    // }
                }        
                else if ($type == 'B' || $type == 'C') {
                    echo '<li>f('. $x.')='.$f.'</li>';  
                }  
                else if ($type == 'D') {
                    echo '<tr><td>'.$i + 1 .'</td><td>'.$x.'</td><td>'.$f.'</td></tr>';  
                } 
                else if ($type == 'E') {
                    echo '<div class="block_func-item">f('. $x.')='.$f.'</div>';
                }

                $sum += $f;
                $i++; $x += $step;

            }

            if ($type == 'B') {
                echo '</ul>';
            }

            if ($type == 'С') {
                echo '</ol>';
            }

            if ($type == 'D') {
                echo '</table>';
            }
            if ($type == 'E') {
                echo '</div>';
            }

            echo '<div class="func_const">Максимальное значение: '. $max_value_func .'<br>';
            echo 'Минимальное значение: '. $min_value_func .'<br>';

            echo 'Сумма всех значений f: '. $sum .'<br>';
            echo 'Среднее значение: '.$sum / $i . '</div>';

        ?>
        </div>
    </main>

<?php require("blocks/footer.php") ?>