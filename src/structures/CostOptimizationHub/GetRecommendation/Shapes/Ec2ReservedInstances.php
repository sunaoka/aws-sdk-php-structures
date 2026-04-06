<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Ec2ReservedInstancesConfiguration|null $configuration
 * @property ReservedInstancesCostCalculation|null $costCalculation
 */
class Ec2ReservedInstances extends Shape
{
    /**
     * @param array{
     *     configuration?: Ec2ReservedInstancesConfiguration|null,
     *     costCalculation?: ReservedInstancesCostCalculation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
