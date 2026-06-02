<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295>|null $Delay
 * @property string|null $PlatformName
 * @property 'Added'|'Cancelled'|'Replaced'|'Scheduled'|null $Status
 * @property string $Time
 * @property RouteTransitTransportModeDetails|null $Transport
 */
class RouteTransitNextDeparture extends Shape
{
    /**
     * @param array{
     *     Delay?: int<0, 4294967295>|null,
     *     PlatformName?: string|null,
     *     Status?: 'Added'|'Cancelled'|'Replaced'|'Scheduled'|null,
     *     Time: string,
     *     Transport?: RouteTransitTransportModeDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
