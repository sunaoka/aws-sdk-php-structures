<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $AvoidActionsForDistance
 * @property double $Heading
 * @property RouteMatrixMatchingOptions $Matching
 * @property RouteMatrixSideOfStreetOptions $SideOfStreet
 */
class RouteMatrixDestinationOptions extends Shape
{
    /**
     * @param array{
     *     AvoidActionsForDistance?: int<0, max>,
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
