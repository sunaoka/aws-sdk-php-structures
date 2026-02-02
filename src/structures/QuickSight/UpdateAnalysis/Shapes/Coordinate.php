<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Latitude
 * @property double $Longitude
 */
class Coordinate extends Shape
{
    /**
     * @param array{
     *     Latitude: double,
     *     Longitude: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
