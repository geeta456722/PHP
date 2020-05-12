<?php

namespace Modules\Course\Transformers;

use App\Http\Responses\JsonResource;

class Course extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return $this->filterAttributes();
    }
}
