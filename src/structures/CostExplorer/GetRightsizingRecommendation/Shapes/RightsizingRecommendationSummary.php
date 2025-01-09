<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TotalRecommendationCount
 * @property string $EstimatedTotalMonthlySavingsAmount
 * @property string $SavingsCurrencyCode
 * @property string $SavingsPercentage
 */
class RightsizingRecommendationSummary extends Shape
{
    /**
     * @param array{
     *     TotalRecommendationCount?: string,
     *     EstimatedTotalMonthlySavingsAmount?: string,
     *     SavingsCurrencyCode?: string,
     *     SavingsPercentage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
