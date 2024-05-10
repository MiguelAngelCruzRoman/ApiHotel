<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client as MongoDBClient;

class HabitacionesModel extends Model
{
    protected $collection;
    
    public function __construct()
    {
        parent::__construct();
        $this->collection = (new MongoDBClient)->apiHotel->habitaciones;
    }

    public function index()
    {
        $habitaciones = $this->collection->find();
        return $habitaciones->toArray();
    }

}