<?php

namespace App\Models;

use App\Model;

/**
 * Class Article
 * @property $title
 * @property $content
 */
class Article extends Model
{
    protected const TABLE = 'articles';
}