<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountScope
 * @property string $term
 * @property string $paymentOption
 * @property string $hourlyCommitment
 */
class ComputeSavingsPlansConfiguration extends Shape
{
    /**
     * @param array{
     *     accountScope?: string,
     *     term?: string,
     *     paymentOption?: string,
     *     hourlyCommitment?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
