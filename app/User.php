<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'sname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function posts(){
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes(){
        return $this->morphMany(Like::class, 'likable');
    }

    public function repository()
    {
        return $this->hasMany(Repository::class);
    }

    public function programme(){
        return $this->belongsTo(Programme::class);
    }

    public function language(){
        return $this->belongsToMany(ProgrammingLanguage::class);
    }
}
