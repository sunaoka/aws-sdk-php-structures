<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FleetSpotCapacityRebalanceRequest $CapacityRebalance
 */
class FleetSpotMaintenanceStrategiesRequest extends Shape
{
    /**
     * @param array{CapacityRebalance?: FleetSpotCapacityRebalanceRequest} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
