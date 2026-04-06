<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSource
 * @property double $Distance
 * @property 'Kilometers'|'Miles' $DistanceUnit
 * @property double $DurationSeconds
 * @property list<double> $RouteBBox
 */
class CalculateRouteSummary extends Shape
{
    /**
     * @param array{
     *     DataSource: string,
     *     Distance: double,
     *     DistanceUnit: 'Kilometers'|'Miles',
     *     DurationSeconds: double,
     *     RouteBBox: list<double>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
