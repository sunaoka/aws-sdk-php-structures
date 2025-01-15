<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EstimatedROI
 * @property string|null $CurrencyCode
 * @property string|null $EstimatedTotalCost
 * @property string|null $CurrentOnDemandSpend
 * @property string|null $EstimatedSavingsAmount
 * @property string|null $TotalRecommendationCount
 * @property string|null $DailyCommitmentToPurchase
 * @property string|null $HourlyCommitmentToPurchase
 * @property string|null $EstimatedSavingsPercentage
 * @property string|null $EstimatedMonthlySavingsAmount
 * @property string|null $EstimatedOnDemandCostWithCurrentCommitment
 */
class SavingsPlansPurchaseRecommendationSummary extends Shape
{
    /**
     * @param array{
     *     EstimatedROI?: string|null,
     *     CurrencyCode?: string|null,
     *     EstimatedTotalCost?: string|null,
     *     CurrentOnDemandSpend?: string|null,
     *     EstimatedSavingsAmount?: string|null,
     *     TotalRecommendationCount?: string|null,
     *     DailyCommitmentToPurchase?: string|null,
     *     HourlyCommitmentToPurchase?: string|null,
     *     EstimatedSavingsPercentage?: string|null,
     *     EstimatedMonthlySavingsAmount?: string|null,
     *     EstimatedOnDemandCostWithCurrentCommitment?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
