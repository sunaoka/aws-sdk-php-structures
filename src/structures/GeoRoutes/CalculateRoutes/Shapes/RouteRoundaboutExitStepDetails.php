<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LocalizedString> $Intersection
 * @property int<1, 12> $RelativeExit
 * @property double $RoundaboutAngle
 * @property 'Left'|'Right'|'Straight' $SteeringDirection
 */
class RouteRoundaboutExitStepDetails extends Shape
{
    /**
     * @param array{
     *     Intersection: list<LocalizedString>,
     *     RelativeExit?: int<1, 12>,
     *     RoundaboutAngle?: double,
     *     SteeringDirection?: 'Left'|'Right'|'Straight'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
