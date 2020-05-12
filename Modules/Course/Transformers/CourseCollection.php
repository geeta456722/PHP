<?php

namespace Modules\Course\Transformers;

use App\Http\Responses\ResourceCollection;

class CourseCollection extends ResourceCollection
{

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->filterAttributes()
        ];
    }
}
