<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);

        return [
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description
        ];
    }

    public function with($request){
        return [
            'version' => '1.0.0',
            'author_url' =>url('http://localhost:8000/api/todo/index')
         ];
    }

}
