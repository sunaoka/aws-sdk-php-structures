<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Ec2ReservedInstancesConfiguration $configuration
 * @property ReservedInstancesCostCalculation $costCalculation
 */
class Ec2ReservedInstances extends Shape
{
    /**
     * @param array{
     *     configuration?: Ec2ReservedInstancesConfiguration,
     *     costCalculation?: ReservedInstancesCostCalculation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
