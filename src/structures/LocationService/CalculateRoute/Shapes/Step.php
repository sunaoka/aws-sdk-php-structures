<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $StartPosition
 * @property list<double> $EndPosition
 * @property double $Distance
 * @property double $DurationSeconds
 * @property int<0, max> $GeometryOffset
 */
class Step extends Shape
{
    /**
     * @param array{
     *     StartPosition: list<double>,
     *     EndPosition: list<double>,
     *     Distance: double,
     *     DurationSeconds: double,
     *     GeometryOffset?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
