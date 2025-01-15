<?php

namespace Sunaoka\Aws\Structures\Support\DescribeTrustedAdvisorCheckSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrustedAdvisorCostOptimizingSummary|null $costOptimizing
 */
class TrustedAdvisorCategorySpecificSummary extends Shape
{
    /**
     * @param array{costOptimizing?: TrustedAdvisorCostOptimizingSummary|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
