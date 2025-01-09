<?php

namespace Sunaoka\Aws\Structures\Support\DescribeTrustedAdvisorCheckResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrustedAdvisorCostOptimizingSummary $costOptimizing
 */
class TrustedAdvisorCategorySpecificSummary extends Shape
{
    /**
     * @param array{costOptimizing?: TrustedAdvisorCostOptimizingSummary} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
