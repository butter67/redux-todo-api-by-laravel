<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    use SoftDeletes;


    public $timestamps = false;

    protected $table = 'contents';

    protected $fillable = [
        'title',
        'content',
        'completed',
        'deleted_at',
        'user_id',
    ];

    /**
     * ネイティブなタイプへキャストする属性
     *
     * @var array
     */
    protected $casts = [
        'options' => 'array',
    ];
}
