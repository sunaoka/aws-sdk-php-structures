<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AvoidActionsForDistance
 * @property bool $AvoidUTurns
 * @property double $Heading
 * @property RouteMatchingOptions $Matching
 * @property RouteSideOfStreetOptions $SideOfStreet
 * @property int $StopDuration
 */
class RouteDestinationOptions extends Shape
{
    /**
     * @param array{
     *     AvoidActionsForDistance?: int,
     *     AvoidUTurns?: bool,
     *     Heading?: double,
     *     Matching?: RouteMatchingOptions,
     *     SideOfStreet?: RouteSideOfStreetOptions,
     *     StopDuration?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
