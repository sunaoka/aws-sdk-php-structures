<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LocalizedString> $Intersection
 * @property int<1, 12>|null $RelativeExit
 * @property double|null $RoundaboutAngle
 * @property 'Left'|'Right'|'Straight'|null $SteeringDirection
 */
class RouteRoundaboutExitStepDetails extends Shape
{
    /**
     * @param array{
     *     Intersection: list<LocalizedString>,
     *     RelativeExit?: int<1, 12>|null,
     *     RoundaboutAngle?: double|null,
     *     SteeringDirection?: 'Left'|'Right'|'Straight'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
