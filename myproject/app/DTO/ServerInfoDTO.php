<?php

namespace App\DTO;

class ServerInfoDTO
{
    public string $php_version;
    public string $server_info;

    public function __construct(string $php_version, string $server_info)
    {
        $this->php_version = $php_version;
        $this->server_info = $server_info;
    }

    public function toArray(): array
    {
        return [
            'php_version' => $this->php_version,
            'server_info' => $this->server_info,
        ];
    }
}

