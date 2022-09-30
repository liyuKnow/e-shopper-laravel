<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessBanner extends Model
{
    protected $fillable = [
        'phone_no',
        'email',
        'facebook_link',
        'telegram_link',
        'linkedin_link',
        'tiktok_link',
        'youtube_link'
    ];
    use HasFactory;
}
