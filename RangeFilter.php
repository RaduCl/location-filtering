<?php

require_once('db.class.php');

class RangeFilter extends Db
{
    private $table = "items";

    public function getItemsInRange($origin, $radius) {
        //echo $this->dbh;
        $query = $this->dbh->prepare('SELECT * FROM items' );
        //echo $origin;
        $query->bindParam(':table', $this->table);
        //$query->bindParam(':location', $origin);
        $query->execute();
        return $query->fetchAll();
    }

}
