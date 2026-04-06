<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LocalizedString> $Intersection
 * @property 'Left'|'Right'|'Straight'|null $SteeringDirection
 * @property double|null $TurnAngle
 * @property 'Sharp'|'Slight'|'Typical'|null $TurnIntensity
 */
class RouteUTurnStepDetails extends Shape
{
    /**
     * @param array{
     *     Intersection: list<LocalizedString>,
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
