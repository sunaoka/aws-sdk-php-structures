<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LocalizedString> $Intersection
 * @property int<1, 12> $RelativeExit
 * @property 'Left'|'Right'|'Straight' $SteeringDirection
 * @property double $TurnAngle
 * @property 'Sharp'|'Slight'|'Typical' $TurnIntensity
 */
class RouteExitStepDetails extends Shape
{
    /**
     * @param array{
     *     Intersection: list<LocalizedString>,
     *     RelativeExit?: int<1, 12>,
     *     SteeringDirection?: 'Left'|'Right'|'Straight',
     *     TurnAngle?: double,
     *     TurnIntensity?: 'Sharp'|'Slight'|'Typical'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
