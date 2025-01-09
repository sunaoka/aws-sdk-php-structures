<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<min, 2000> $AvoidActionsForDistance
 * @property bool $AvoidUTurns
 * @property double $Heading
 * @property RouteMatchingOptions $Matching
 * @property bool $PassThrough
 * @property list<double> $Position
 * @property RouteSideOfStreetOptions $SideOfStreet
 * @property int<0, 4294967295> $StopDuration
 */
class RouteWaypoint extends Shape
{
    /**
     * @param array{
     *     AvoidActionsForDistance?: int<min, 2000>,
     *     AvoidUTurns?: bool,
     *     Heading?: double,
     *     Matching?: RouteMatchingOptions,
     *     PassThrough?: bool,
     *     Position: list<double>,
     *     SideOfStreet?: RouteSideOfStreetOptions,
     *     StopDuration?: int<0, 4294967295>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
