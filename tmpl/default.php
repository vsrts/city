<?php
// No direct access
defined('_JEXEC') or die; ?>
<?php

    $listCity = explode(", ", $city);
    print_r($listCity);
    foreach($listCity as $cityname){
        echo "
            <li>
                <a href='http://$cityname.сайт.рф '>$cityname</a>
            </li>
        ";
    }

?>