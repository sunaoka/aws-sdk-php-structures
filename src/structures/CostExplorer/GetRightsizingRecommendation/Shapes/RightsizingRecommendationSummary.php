<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TotalRecommendationCount
 * @property string|null $EstimatedTotalMonthlySavingsAmount
 * @property string|null $SavingsCurrencyCode
 * @property string|null $SavingsPercentage
 */
class RightsizingRecommendationSummary extends Shape
{
    /**
     * @param array{
     *     TotalRecommendationCount?: string|null,
     *     EstimatedTotalMonthlySavingsAmount?: string|null,
     *     SavingsCurrencyCode?: string|null,
     *     SavingsPercentage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
