<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Distance
 * @property double $DurationSeconds
 * @property list<double> $EndPosition
 * @property int<0, max>|null $GeometryOffset
 * @property list<double> $StartPosition
 */
class Step extends Shape
{
    /**
     * @param array{
     *     Distance: double,
     *     DurationSeconds: double,
     *     EndPosition: list<double>,
     *     GeometryOffset?: int<0, max>|null,
     *     StartPosition: list<double>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
