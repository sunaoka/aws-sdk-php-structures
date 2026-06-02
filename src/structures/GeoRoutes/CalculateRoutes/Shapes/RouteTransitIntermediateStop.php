<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'NoEntry'|'NoExit'>|null $Attributes
 * @property RouteTransitDeparture $Departure
 * @property int<0, 4294967295> $Duration
 * @property int<0, max>|null $GeometryOffset
 * @property RouteTransitTransportModeDetails|null $Transport
 */
class RouteTransitIntermediateStop extends Shape
{
    /**
     * @param array{
     *     Attributes?: list<'NoEntry'|'NoExit'>|null,
     *     Departure: RouteTransitDeparture,
     *     Duration: int<0, 4294967295>,
     *     GeometryOffset?: int<0, max>|null,
     *     Transport?: RouteTransitTransportModeDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
