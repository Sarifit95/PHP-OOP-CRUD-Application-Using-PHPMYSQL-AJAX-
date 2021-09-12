<?php
function get_total_all_records()
{$c = new database();
    $c->select("data","*");
    $result = $c->sql;
    return mysqli_num_rows($result);
}

?>
