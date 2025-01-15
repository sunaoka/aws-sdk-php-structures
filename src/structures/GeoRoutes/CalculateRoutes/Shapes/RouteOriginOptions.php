<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<min, 2000>|null $AvoidActionsForDistance
 * @property bool|null $AvoidUTurns
 * @property double|null $Heading
 * @property RouteMatchingOptions|null $Matching
 * @property RouteSideOfStreetOptions|null $SideOfStreet
 */
class RouteOriginOptions extends Shape
{
    /**
     * @param array{
     *     AvoidActionsForDistance?: int<min, 2000>|null,
     *     AvoidUTurns?: bool|null,
     *     Heading?: double|null,
     *     Matching?: RouteMatchingOptions|null,
     *     SideOfStreet?: RouteSideOfStreetOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
