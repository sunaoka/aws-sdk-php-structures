<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $RouteBBox
 * @property string $DataSource
 * @property double $Distance
 * @property double $DurationSeconds
 * @property 'Kilometers'|'Miles' $DistanceUnit
 */
class CalculateRouteSummary extends Shape
{
    /**
     * @param array{
     *     RouteBBox: list<double>,
     *     DataSource: string,
     *     Distance: double,
     *     DurationSeconds: double,
     *     DistanceUnit: 'Kilometers'|'Miles'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
