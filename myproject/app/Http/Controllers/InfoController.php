<?php

namespace App\Http\Controllers;

use App\DTO\DatabaseInfoDTO;
use App\DTO\ClientInfoDTO;
use App\DTO\ServerInfoDTO;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class InfoController extends Controller
{
    public function serverInfo()
    {
        $serverInfoDTO = new ServerInfoDTO(phpversion(), 'Серверная информация недоступна');

        return response()->json($serverInfoDTO->toArray());
    }

    public function clientInfo(Request $request): JsonResponse
    {
        $clientInfoDTO = new ClientInfoDTO($request->ip(), $request->header('User-Agent'));
    
        return response()->json($clientInfoDTO->toArray());
    }

    public function databaseInfo(): JsonResponse
    {
        $databaseInfoDTO = new DatabaseInfoDTO(DB::connection()->getDatabaseName());
    
        return response()->json($databaseInfoDTO->toArray());
    }
}
