<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EstimatedROI
 * @property string $CurrencyCode
 * @property string $EstimatedTotalCost
 * @property string $CurrentOnDemandSpend
 * @property string $EstimatedSavingsAmount
 * @property string $TotalRecommendationCount
 * @property string $DailyCommitmentToPurchase
 * @property string $HourlyCommitmentToPurchase
 * @property string $EstimatedSavingsPercentage
 * @property string $EstimatedMonthlySavingsAmount
 * @property string $EstimatedOnDemandCostWithCurrentCommitment
 */
class SavingsPlansPurchaseRecommendationSummary extends Shape
{
    /**
     * @param array{
     *     EstimatedROI?: string,
     *     CurrencyCode?: string,
     *     EstimatedTotalCost?: string,
     *     CurrentOnDemandSpend?: string,
     *     EstimatedSavingsAmount?: string,
     *     TotalRecommendationCount?: string,
     *     DailyCommitmentToPurchase?: string,
     *     HourlyCommitmentToPurchase?: string,
     *     EstimatedSavingsPercentage?: string,
     *     EstimatedMonthlySavingsAmount?: string,
     *     EstimatedOnDemandCostWithCurrentCommitment?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
