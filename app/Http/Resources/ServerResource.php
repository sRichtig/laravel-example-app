<?php

namespace App\Http\Resources;

use App\Models\Server;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $servers = Server::all();
        return parent::toArray($servers);
    }

    public function list(): \Illuminate\Database\Eloquent\Collection
    {        
        return Server::all();
    }
}
