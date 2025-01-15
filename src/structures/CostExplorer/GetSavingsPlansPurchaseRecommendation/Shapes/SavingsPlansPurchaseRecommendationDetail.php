<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SavingsPlansDetails|null $SavingsPlansDetails
 * @property string|null $AccountId
 * @property string|null $UpfrontCost
 * @property string|null $EstimatedROI
 * @property string|null $CurrencyCode
 * @property string|null $EstimatedSPCost
 * @property string|null $EstimatedOnDemandCost
 * @property string|null $EstimatedOnDemandCostWithCurrentCommitment
 * @property string|null $EstimatedSavingsAmount
 * @property string|null $EstimatedSavingsPercentage
 * @property string|null $HourlyCommitmentToPurchase
 * @property string|null $EstimatedAverageUtilization
 * @property string|null $EstimatedMonthlySavingsAmount
 * @property string|null $CurrentMinimumHourlyOnDemandSpend
 * @property string|null $CurrentMaximumHourlyOnDemandSpend
 * @property string|null $CurrentAverageHourlyOnDemandSpend
 * @property string|null $RecommendationDetailId
 */
class SavingsPlansPurchaseRecommendationDetail extends Shape
{
    /**
     * @param array{
     *     SavingsPlansDetails?: SavingsPlansDetails|null,
     *     AccountId?: string|null,
     *     UpfrontCost?: string|null,
     *     EstimatedROI?: string|null,
     *     CurrencyCode?: string|null,
     *     EstimatedSPCost?: string|null,
     *     EstimatedOnDemandCost?: string|null,
     *     EstimatedOnDemandCostWithCurrentCommitment?: string|null,
     *     EstimatedSavingsAmount?: string|null,
     *     EstimatedSavingsPercentage?: string|null,
     *     HourlyCommitmentToPurchase?: string|null,
     *     EstimatedAverageUtilization?: string|null,
     *     EstimatedMonthlySavingsAmount?: string|null,
     *     CurrentMinimumHourlyOnDemandSpend?: string|null,
     *     CurrentMaximumHourlyOnDemandSpend?: string|null,
     *     CurrentAverageHourlyOnDemandSpend?: string|null,
     *     RecommendationDetailId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
