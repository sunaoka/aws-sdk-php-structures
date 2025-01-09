<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AvoidActionsForDistance
 * @property double $Heading
 * @property RouteMatrixMatchingOptions $Matching
 * @property RouteMatrixSideOfStreetOptions $SideOfStreet
 */
class RouteMatrixOriginOptions extends Shape
{
    /**
     * @param array{
     *     AvoidActionsForDistance?: int,
     *     Heading?: double,
     *     Matching?: RouteMatrixMatchingOptions,
     *     SideOfStreet?: RouteMatrixSideOfStreetOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
