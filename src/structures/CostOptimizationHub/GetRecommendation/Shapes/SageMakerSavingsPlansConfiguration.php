<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountScope
 * @property string|null $term
 * @property string|null $paymentOption
 * @property string|null $hourlyCommitment
 */
class SageMakerSavingsPlansConfiguration extends Shape
{
    /**
     * @param array{
     *     accountScope?: string|null,
     *     term?: string|null,
     *     paymentOption?: string|null,
     *     hourlyCommitment?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
