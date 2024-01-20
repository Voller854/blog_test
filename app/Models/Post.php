<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class  Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * @var mixed
     */

    protected $table ='posts';
    protected $quarded = false;
    protected $fillable = ['title', 'content', 'preview_image', 'main_image','category_id'];

    protected $withCount = ['likedUsers'];
    protected $with = ['category'];


    public function tags() {
        return $this->belongsToMany(Tag::class,'post_tags','post_id','tag_id');
    }
    public function category()
{
    return $this->belongsTo(Category::class,'category_id', 'id');
}
public function likedUsers()
{
     return $this->belongsToMany(User::class,'post_user_likes','post_id','user_id');
}
public function comments(){
        return $this->hasMany(Comment::class,'post_id','id');
}

}
