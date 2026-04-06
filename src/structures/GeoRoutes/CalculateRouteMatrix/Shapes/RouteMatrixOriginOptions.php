<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $AvoidActionsForDistance
 * @property double|null $Heading
 * @property RouteMatrixMatchingOptions|null $Matching
 * @property RouteMatrixSideOfStreetOptions|null $SideOfStreet
 */
class RouteMatrixOriginOptions extends Shape
{
    /**
     * @param array{
     *     AvoidActionsForDistance?: int<0, max>|null,
     *     Heading?: double|null,
     *     Matching?: RouteMatrixMatchingOptions|null,
     *     SideOfStreet?: RouteMatrixSideOfStreetOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
