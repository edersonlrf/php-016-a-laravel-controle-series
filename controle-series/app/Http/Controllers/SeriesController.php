<?php

namespace App\Http\Controllers;

class SeriesController extends Controller
{
    public function listarSeries() {
        $series = [
            'Breaking Bad',
            'LOST',
            'Naruto'
        ];

        $html = "<ul>";
        foreach($series as $serie) {
            $html .= "<li>{$serie}</li>";
        }
        $html .= "<ul>";

        return $html;
    }
}