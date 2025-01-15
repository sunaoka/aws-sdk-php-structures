<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccuratePolylineUnavailable'|'Other'|'ViolatedAvoidDirtRoad'|'ViolatedAvoidTunnel'|'ViolatedPedestrianOption' $Code
 * @property 'High'|'Low'|null $Impact
 */
class RoutePedestrianNotice extends Shape
{
    /**
     * @param array{
     *     Code: 'AccuratePolylineUnavailable'|'Other'|'ViolatedAvoidDirtRoad'|'ViolatedAvoidTunnel'|'ViolatedPedestrianOption',
     *     Impact?: 'High'|'Low'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
