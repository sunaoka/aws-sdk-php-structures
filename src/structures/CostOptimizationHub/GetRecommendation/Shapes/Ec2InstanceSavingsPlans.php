<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Ec2InstanceSavingsPlansConfiguration|null $configuration
 * @property SavingsPlansCostCalculation|null $costCalculation
 */
class Ec2InstanceSavingsPlans extends Shape
{
    /**
     * @param array{
     *     configuration?: Ec2InstanceSavingsPlansConfiguration|null,
     *     costCalculation?: SavingsPlansCostCalculation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
