<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SpotCapacityRebalance|null $CapacityRebalance
 */
class SpotMaintenanceStrategies extends Shape
{
    /**
     * @param array{CapacityRebalance?: SpotCapacityRebalance|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
