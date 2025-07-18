<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\LineBudget;
use App\Models\Engagement;

class LineBudgetProposal extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function budgetLine()
    {   
        return $this->belongsTo(LineBudget::class);
    }

    public function engagements()
    {
        return $this->hasMany(Engagement::class);
    }
}
