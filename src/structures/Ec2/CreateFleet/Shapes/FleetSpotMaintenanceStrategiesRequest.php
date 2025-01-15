<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FleetSpotCapacityRebalanceRequest|null $CapacityRebalance
 */
class FleetSpotMaintenanceStrategiesRequest extends Shape
{
    /**
     * @param array{CapacityRebalance?: FleetSpotCapacityRebalanceRequest|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
