<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<min, 2000>|null $AvoidActionsForDistance
 * @property bool|null $AvoidUTurns
 * @property double|null $Heading
 * @property RouteMatchingOptions|null $Matching
 * @property bool|null $PassThrough
 * @property list<double> $Position
 * @property RouteSideOfStreetOptions|null $SideOfStreet
 * @property int<0, 4294967295>|null $StopDuration
 */
class RouteWaypoint extends Shape
{
    /**
     * @param array{
     *     AvoidActionsForDistance?: int<min, 2000>|null,
     *     AvoidUTurns?: bool|null,
     *     Heading?: double|null,
     *     Matching?: RouteMatchingOptions|null,
     *     PassThrough?: bool|null,
     *     Position: list<double>,
     *     SideOfStreet?: RouteSideOfStreetOptions|null,
     *     StopDuration?: int<0, 4294967295>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
