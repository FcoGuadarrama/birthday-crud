<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper
{
    /**
     * Genera una fecha aleatoria entre dos fechas dadas.
     *
     * @return Carbon Fecha aleatoria entre las dos fechas dadas.
     */
    public static function randomDateBetween(): Carbon
    {
        $startDate = Carbon::now()->subYears(30);
        $endDate = Carbon::now()->subYears(18);

        return Carbon::create(
            rand($endDate->year, $startDate->year),
            rand(1, 12),
            rand(1, 28),
            0, 0, 0
        );
    }
}
