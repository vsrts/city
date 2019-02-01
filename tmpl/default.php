<?php
// No direct access
defined('_JEXEC') or die; ?>
<?php

$db =& JFactory::getDBO();
$database_name = "sushi";
if ($db->select($database_name)) {
    $query = $db->getQuery(true);
    $query->select('*')
        ->from('cities');

    $db->setQuery($query);
    $results = $db->loadObjectList();

    print_r($results);

}


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