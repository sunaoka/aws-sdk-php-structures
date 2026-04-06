<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Distance
 * @property double $DurationSeconds
 * @property list<double> $EndPosition
 * @property LegGeometry|null $Geometry
 * @property list<double> $StartPosition
 * @property list<Step> $Steps
 */
class Leg extends Shape
{
    /**
     * @param array{
     *     Distance: double,
     *     DurationSeconds: double,
     *     EndPosition: list<double>,
     *     Geometry?: LegGeometry|null,
     *     StartPosition: list<double>,
     *     Steps: list<Step>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
