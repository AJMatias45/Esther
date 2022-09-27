<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstherController extends Controller
{
    const BOOK_NAME = 'Esther';
    const BIBLE_VERSION = 'King James Version';

    public function readAll()
    {
        return view("esther.all", [
    'book_name'=>static::BOOK_NAME,
    'bible_version'=>static::BIBLE_VERSION,
]);
    }
    public function readByChapter($chapter_number)
    {
        return view("esther.chapter", 
        ['book_name'=>static::BOOK_NAME,
        'bible_version'=>static::BIBLE_VERSION,
        'chapter_number' => $chapter_number]);
    }

}
