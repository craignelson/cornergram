<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function profileImage() 
    {
        $profileImage = ($this->image) ?  $this->image : 'profile/HS15o1K1vmKFD9G159icAWDsKlRIoPDPr0PF5yGT.png';
        return '/storage/' . $profileImage;
    }
    
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }


    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
