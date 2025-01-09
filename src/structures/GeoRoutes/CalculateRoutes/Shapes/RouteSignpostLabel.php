<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteNumber $RouteNumber
 * @property LocalizedString $Text
 */
class RouteSignpostLabel extends Shape
{
    /**
     * @param array{
     *     RouteNumber?: RouteNumber,
     *     Text?: LocalizedString
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
