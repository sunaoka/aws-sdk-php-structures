<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetVehicle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimePeriod $stateTemplateUpdateRate
 */
class PeriodicStateTemplateUpdateStrategy extends Shape
{
    /**
     * @param array{stateTemplateUpdateRate: TimePeriod} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
