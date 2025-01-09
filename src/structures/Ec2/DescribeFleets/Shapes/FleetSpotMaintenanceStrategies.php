<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FleetSpotCapacityRebalance $CapacityRebalance
 */
class FleetSpotMaintenanceStrategies extends Shape
{
    /**
     * @param array{CapacityRebalance?: FleetSpotCapacityRebalance} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
