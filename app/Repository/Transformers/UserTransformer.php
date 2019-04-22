<?php
namespace App\Repository\Transformers; 

class UserTransformer extends Transformers {

    public function transform($item) {
        return [
            'id' => $item->id,
            'name' => $item->name,
            'email' => $item->email,
            'company' => $item->company,
            'position' => $item->position,
            'phone' => $item->phone,
            'created_at' => $item->created_at->toDateTimeString(),
            'updated_at' => $item->updated_at->toDateTimeString(),
        ];
    }
}