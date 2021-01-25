<?php

namespace App\Models;
require __DIR__ . "/../../vendor/autoload.php";
use Carbon\Carbon;

class Model
{
    public $created_at;
    public $updated_at;

    function __construct()
    {
        $this->created_at = Carbon::parse($this->created_at)->locale('fr_FR');
        $this->updated_at = Carbon::parse($this->updated_at)->locale('fr_FR');
    }

    /**
     * Get the value of created_at
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}
