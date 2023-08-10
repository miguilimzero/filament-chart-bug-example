<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Database\Eloquent\Model;

class ExampleWidget2 extends ChartWidget
{
    public ?Model $record = null;

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Clicks',
                    'data' => [30, 60, 90],
                ],
            ],
            'labels' => ['Cool Users', 'Bad Users', 'No Users'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
