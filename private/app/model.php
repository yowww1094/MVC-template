<?php

// main model class

class Model extends database{
    protected $table = 'test';

    public function where($column, $value){
        $query = "select * from $this->table where :column = :value";

        return $this->query($query, [
            'column' => $column,
            'value' => $value,
        ]);
    }

    public function findAll(){
        $query = "select * from $this->table";

        return $this->query($query);
    }
}