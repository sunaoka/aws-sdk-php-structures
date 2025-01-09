<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $StartPosition
 * @property list<double> $EndPosition
 * @property double $Distance
 * @property double $DurationSeconds
 * @property LegGeometry $Geometry
 * @property list<Step> $Steps
 */
class Leg extends Shape
{
    /**
     * @param array{
     *     StartPosition: list<double>,
     *     EndPosition: list<double>,
     *     Distance: double,
     *     DurationSeconds: double,
     *     Geometry?: LegGeometry,
     *     Steps: list<Step>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
