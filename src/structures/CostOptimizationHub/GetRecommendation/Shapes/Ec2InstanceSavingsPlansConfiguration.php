<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountScope
 * @property string|null $term
 * @property string|null $paymentOption
 * @property string|null $hourlyCommitment
 * @property string|null $instanceFamily
 * @property string|null $savingsPlansRegion
 */
class Ec2InstanceSavingsPlansConfiguration extends Shape
{
    /**
     * @param array{
     *     accountScope?: string|null,
     *     term?: string|null,
     *     paymentOption?: string|null,
     *     hourlyCommitment?: string|null,
     *     instanceFamily?: string|null,
     *     savingsPlansRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
