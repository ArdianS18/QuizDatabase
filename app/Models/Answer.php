<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Answer extends Model
{
    use HasFactory;

    /**
     * Get the question that owns the Answer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class, 'foreign_key', 'other_key');
    }

    /**
     * Get all of the question_answer for the Answer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function question_answers(): HasMany
    {
        return $this->hasMany(Question_answer::class, 'foreign_key', 'local_key');
    }
}
