<?php

namespace Sunaoka\Aws\Structures\Support\DescribeTrustedAdvisorCheckResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $estimatedMonthlySavings
 * @property double $estimatedPercentMonthlySavings
 */
class TrustedAdvisorCostOptimizingSummary extends Shape
{
    /**
     * @param array{
     *     estimatedMonthlySavings: double,
     *     estimatedPercentMonthlySavings: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
