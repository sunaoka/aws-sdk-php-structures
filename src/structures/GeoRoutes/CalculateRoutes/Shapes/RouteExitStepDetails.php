<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LocalizedString> $Intersection
 * @property int<1, 12>|null $RelativeExit
 * @property 'Left'|'Right'|'Straight'|null $SteeringDirection
 * @property double|null $TurnAngle
 * @property 'Sharp'|'Slight'|'Typical'|null $TurnIntensity
 */
class RouteExitStepDetails extends Shape
{
    /**
     * @param array{
     *     Intersection: list<LocalizedString>,
     *     RelativeExit?: int<1, 12>|null,
     *     SteeringDirection?: 'Left'|'Right'|'Straight'|null,
     *     TurnAngle?: double|null,
     *     TurnIntensity?: 'Sharp'|'Slight'|'Typical'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
