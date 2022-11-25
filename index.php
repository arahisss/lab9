<?php require("blocks/header.php"); ?>
    
    <main>
        <div class="content">
            <img src="img/function.png" alt="function"><br>
        

        <?php 
            $x = 15;
            $encounting = 10;
            $step = 2;
            $type = 'B';
            
            $min_value = 100;
            $max_value = -100;
            $sum = 0;
            $f_mean = 0;
            $max_value_func = -200;
            $min_value_func = 200;

            $count = 0;


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
                else if ($x < 20) {
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

                if ($f > $max_value_func && $f != 'error') {
                    $max_value_func = $f;
                }

                if ($f < $min_value_func && $f != 'error') {
                    $min_value_func = $f;
                }

                if ($f != 'error') {
                    $count += 1;
                }

                switch ($type) {
                    case ('A'):
                        if ($f == 'error') {
                            echo 'f('.$x.')='.$f.'<br>';
                        }
                        else {
                            echo 'f('.$x.')='.round($f).'<br>';
                        }
                        break;
                        // if ($i < $encounting - 1) {
                        //     echo '<br>';
                        // }
                           
                    case ('B'):
                        if ($f == 'error') {
                            echo '<li>f('. $x.')='.$f.'</li>'; 
                        }
                        else {
                            echo '<li>f('. $x.')='.round($f, 3).'</li>'; 
                        }
                        break;

                    case ('C'):
                        if ($f == 'error') {
                            echo '<li>f('. $x.')='.$f.'</li>'; 
                        }
                        else {
                            echo '<li>f('. $x.')='.round($f, 3).'</li>'; 
                        }
                        break;

                    case ('D'):
                        if ($f != 'error') {
                            echo '<tr><td>'.$i + 1 .'</td><td>'.$x.'</td><td>'.round($f, 3).'</td></tr>';
                        }
                        else {
                            echo '<tr><td>'.$i + 1 .'</td><td>'.$x.'</td><td>'.$f.'</td></tr>';

                        }
                        break;
                    case ('E'):
                        if ($f == 'error') {
                            echo '<div class="block_func-item">f('. $x.')='.$f.'</div>';
                        }
                        else {
                            echo '<div class="block_func-item">f('. $x.')='.round($f).'</div>';
                        }

                        break;
                }
                

                if ($f != 'error') {
                    $sum += $f;
                }
                $i++;   
                $x += $step;


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

            echo '<div class="func_const">Максимальное значение: '. round($max_value_func, 3) .'<br>';
            echo 'Минимальное значение: '. round($min_value_func, 3) .'<br>';

            echo 'Сумма всех значений f: '. round($sum, 3) .'<br>';
            echo 'Среднее значение: '.round(($sum / $count), 3) . '</div>';

        ?>
        </div>
    </main>

<?php require("blocks/footer.php") ?>