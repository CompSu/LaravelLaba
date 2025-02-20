<?php

namespace App\DTO;

use Illuminate\Support\Facades\DB;

class DatabaseInfoDTO
{
    public string $database_name;

    public function __construct(string $database_name)
    {
        $this->database_name = $database_name;
    }

    public function toArray(): array
    {
        return [
            'database_name' => $this->database_name,
        ];
    }
}
