<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            	'columns' => $this->additional['columns'],
            	'data' => $this->collection,
            	'pagination' => [
	                'current_page' => $this->currentPage(),
	                'last_page' => $this->lastPage(),
	                'per_page' => $this->perPage(),
	                'total' => $this->total(),
	            ],
            ];
    }
}
