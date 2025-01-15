<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FleetSpotCapacityRebalance|null $CapacityRebalance
 */
class FleetSpotMaintenanceStrategies extends Shape
{
    /**
     * @param array{CapacityRebalance?: FleetSpotCapacityRebalance|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
