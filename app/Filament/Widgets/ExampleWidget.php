<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Database\Eloquent\Model;

class ExampleWidget extends ChartWidget
{
    public ?Model $record = null;

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Clicks',
                    'data' => [10, 20, 30, 40, 50, 60, 70],
                ],
            ],
            'labels' => ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6', 'Day 7'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
