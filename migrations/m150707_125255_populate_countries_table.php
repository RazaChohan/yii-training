<?php

use yii\db\Schema;
use yii\db\Migration;

class m150707_125255_populate_countries_table extends Migration
{
    //Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->insert('tbl_countries',array(
            'code'=>'AU', 'name' => 'Australia','population' => 18886000));
        $this->insert('tbl_countries',array(
            'code'=>'BR', 'name' => 'Brazil','population' => 170115000));
        $this->insert('tbl_countries',array(
            'code'=>'CA', 'name' => 'Canada','population' => 1147000));
        $this->insert('tbl_countries',array(
            'code'=>'CN', 'name' => 'China','population' => 1277558000));
        $this->insert('tbl_countries',array(
            'code'=>'DE', 'name' => 'Germany','population' => 82164700));
        $this->insert('tbl_countries',array(
            'code'=>'GB', 'name' => 'United Kingdom','population' => 59623400));
        $this->insert('tbl_countries',array(
            'code'=>'FR', 'name' => 'France','population' => 59225700));
        $this->insert('tbl_countries',array(
            'code'=>'IN', 'name' => 'India','population' => 1013662000));
        $this->insert('tbl_countries',array(
            'code'=>'RU', 'name' => 'Russia','population' => 146934000));
        $this->insert('tbl_countries',array(
            'code'=>'US', 'name' => 'United States','population' => 278357000));
    }
    
    public function safeDown()
    {
        $this->delete('tbl_countries');
    }

}
