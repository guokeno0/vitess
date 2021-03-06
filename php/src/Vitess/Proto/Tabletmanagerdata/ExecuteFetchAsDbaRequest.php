<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: tabletmanagerdata.proto
//   Date: 2016-01-22 01:34:35

namespace Vitess\Proto\Tabletmanagerdata {

  class ExecuteFetchAsDbaRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $query = null;
    
    /**  @var string */
    public $db_name = null;
    
    /**  @var int */
    public $max_rows = null;
    
    /**  @var boolean */
    public $disable_binlogs = null;
    
    /**  @var boolean */
    public $reload_schema = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'tabletmanagerdata.ExecuteFetchAsDbaRequest');

      // OPTIONAL STRING query = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "query";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING db_name = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "db_name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 max_rows = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "max_rows";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL disable_binlogs = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "disable_binlogs";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL reload_schema = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "reload_schema";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <query> has a value
     *
     * @return boolean
     */
    public function hasQuery(){
      return $this->_has(1);
    }
    
    /**
     * Clear <query> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\ExecuteFetchAsDbaRequest
     */
    public function clearQuery(){
      return $this->_clear(1);
    }
    
    /**
     * Get <query> value
     *
     * @return string
     */
    public function getQuery(){
      return $this->_get(1);
    }
    
    /**
     * Set <query> value
     *
     * @param string $value
     * @return \Vitess\Proto\Tabletmanagerdata\ExecuteFetchAsDbaRequest
     */
    public function setQuery( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <db_name> has a value
     *
     * @return boolean
     */
    public function hasDbName(){
      return $this->_has(2);
    }
    
    /**
     * Clear <db_name> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\ExecuteFetchAsDbaRequest
     */
    public function clearDbName(){
      return $this->_clear(2);
    }
    
    /**
     * Get <db_name> value
     *
     * @return string
     */
    public function getDbName(){
      return $this->_get(2);
    }
    
    /**
     * Set <db_name> value
     *
     * @param string $value
     * @return \Vitess\Proto\Tabletmanagerdata\ExecuteFetchAsDbaRequest
     */
    public function setDbName( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <max_rows> has a value
     *
     * @return boolean
     */
    public function hasMaxRows(){
      return $this->_has(3);
    }
    
    /**
     * Clear <max_rows> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\ExecuteFetchAsDbaRequest
     */
    public function clearMaxRows(){
      return $this->_clear(3);
    }
    
    /**
     * Get <max_rows> value
     *
     * @return int
     */
    public function getMaxRows(){
      return $this->_get(3);
    }
    
    /**
     * Set <max_rows> value
     *
     * @param int $value
     * @return \Vitess\Proto\Tabletmanagerdata\ExecuteFetchAsDbaRequest
     */
    public function setMaxRows( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <disable_binlogs> has a value
     *
     * @return boolean
     */
    public function hasDisableBinlogs(){
      return $this->_has(4);
    }
    
    /**
     * Clear <disable_binlogs> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\ExecuteFetchAsDbaRequest
     */
    public function clearDisableBinlogs(){
      return $this->_clear(4);
    }
    
    /**
     * Get <disable_binlogs> value
     *
     * @return boolean
     */
    public function getDisableBinlogs(){
      return $this->_get(4);
    }
    
    /**
     * Set <disable_binlogs> value
     *
     * @param boolean $value
     * @return \Vitess\Proto\Tabletmanagerdata\ExecuteFetchAsDbaRequest
     */
    public function setDisableBinlogs( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <reload_schema> has a value
     *
     * @return boolean
     */
    public function hasReloadSchema(){
      return $this->_has(5);
    }
    
    /**
     * Clear <reload_schema> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\ExecuteFetchAsDbaRequest
     */
    public function clearReloadSchema(){
      return $this->_clear(5);
    }
    
    /**
     * Get <reload_schema> value
     *
     * @return boolean
     */
    public function getReloadSchema(){
      return $this->_get(5);
    }
    
    /**
     * Set <reload_schema> value
     *
     * @param boolean $value
     * @return \Vitess\Proto\Tabletmanagerdata\ExecuteFetchAsDbaRequest
     */
    public function setReloadSchema( $value){
      return $this->_set(5, $value);
    }
  }
}

