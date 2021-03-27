<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'           => $this->name,
            'slug'           => $this->slug,
            'image'          => $this->image,
            'description'    => $this->description,
            'name'           => $this->name,
            'fecha_creacion' => $this->created_at,
            'user'           => (object) [
                'name'  => $this->user->name,
                'email' => $this->user->email,
            ],
        ];

    }
}
