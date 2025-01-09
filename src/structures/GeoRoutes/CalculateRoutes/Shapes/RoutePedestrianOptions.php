<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Speed
 */
class RoutePedestrianOptions extends Shape
{
    /**
     * @param array{Speed?: double} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
