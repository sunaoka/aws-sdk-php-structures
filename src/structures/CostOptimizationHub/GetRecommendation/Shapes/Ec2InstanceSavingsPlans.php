<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Ec2InstanceSavingsPlansConfiguration $configuration
 * @property SavingsPlansCostCalculation $costCalculation
 */
class Ec2InstanceSavingsPlans extends Shape
{
    /**
     * @param array{
     *     configuration?: Ec2InstanceSavingsPlansConfiguration,
     *     costCalculation?: SavingsPlansCostCalculation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
