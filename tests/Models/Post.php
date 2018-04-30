<?php

namespace Asahasrabuddhe\LaravelAPI\Tests\Models;

use Asahasrabuddhe\LaravelAPI\BaseModel;
use Asahasrabuddhe\LaravelAPI\Tests\Http\Resources\AddressResource;

class Post extends BaseModel
{
    protected $resource = PostResource::class;

    public function user()
    {
        return $this->belongsTo('Asahasrabuddhe\LaravelAPI\Tests\Models\User');
    }
}
