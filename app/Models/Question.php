<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    /**
     * Get all of the answer for the question
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class, 'foreign_key', 'local_key');
    }

    /**
     * Get all of the question for the question
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function question_answers(): HasMany
    {
        return $this->hasMany(Question_answer::class, 'foreign_key', 'local_key');
    }

}
