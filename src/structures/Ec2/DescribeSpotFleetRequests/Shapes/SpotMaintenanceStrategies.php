<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SpotCapacityRebalance $CapacityRebalance
 */
class SpotMaintenanceStrategies extends Shape
{
    /**
     * @param array{CapacityRebalance?: SpotCapacityRebalance} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
