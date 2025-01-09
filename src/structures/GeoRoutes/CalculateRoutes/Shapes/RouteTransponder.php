<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SystemName
 */
class RouteTransponder extends Shape
{
    /**
     * @param array{SystemName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
