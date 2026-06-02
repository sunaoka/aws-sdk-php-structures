<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property 'Delayed'|'Detoured'|'Other'|'ServiceAdded'|'ServiceCancelled'|'ServiceModified'|'ServiceReduced'|'StopMoved' $Effect
 * @property string|null $EndTime
 * @property string|null $StartTime
 * @property 'Accident'|'Construction'|'Demonstration'|'Holiday'|'Maintenance'|'MedicalEmergency'|'Other'|'PoliceActivity'|'Strike'|'TechnicalProblem'|'Weather' $Type
 * @property string|null $Url
 */
class RouteTransitIncident extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Effect: 'Delayed'|'Detoured'|'Other'|'ServiceAdded'|'ServiceCancelled'|'ServiceModified'|'ServiceReduced'|'StopMoved',
     *     EndTime?: string|null,
     *     StartTime?: string|null,
     *     Type: 'Accident'|'Construction'|'Demonstration'|'Holiday'|'Maintenance'|'MedicalEmergency'|'Other'|'PoliceActivity'|'Strike'|'TechnicalProblem'|'Weather',
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
