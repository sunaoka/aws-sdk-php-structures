<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteNumber|null $RouteNumber
 * @property LocalizedString|null $Text
 */
class RouteSignpostLabel extends Shape
{
    /**
     * @param array{
     *     RouteNumber?: RouteNumber|null,
     *     Text?: LocalizedString|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
