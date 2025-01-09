<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccuratePolylineUnavailable'|'Other'|'ViolatedAvoidDirtRoad'|'ViolatedAvoidTunnel'|'ViolatedPedestrianOption' $Code
 * @property 'High'|'Low' $Impact
 */
class RoutePedestrianNotice extends Shape
{
    /**
     * @param array{
     *     Code: 'AccuratePolylineUnavailable'|'Other'|'ViolatedAvoidDirtRoad'|'ViolatedAvoidTunnel'|'ViolatedPedestrianOption',
     *     Impact?: 'High'|'Low'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
