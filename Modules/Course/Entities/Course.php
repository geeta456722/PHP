<?php

namespace Modules\Course\Entities;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /*
     * This would be returned to the api consumer
     */
    public $responseModel = [
        "id",
        "title",
        "created_at",
        "updated_at",
        "user"
    ];

    protected $fillable = ['title', 'user_id'];

    public function user()
    {
        return $this->belongsTo('Modules\User\Entities\User');
    }
}
