<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SavingsPlansDetails $SavingsPlansDetails
 * @property string $AccountId
 * @property string $UpfrontCost
 * @property string $EstimatedROI
 * @property string $CurrencyCode
 * @property string $EstimatedSPCost
 * @property string $EstimatedOnDemandCost
 * @property string $EstimatedOnDemandCostWithCurrentCommitment
 * @property string $EstimatedSavingsAmount
 * @property string $EstimatedSavingsPercentage
 * @property string $HourlyCommitmentToPurchase
 * @property string $EstimatedAverageUtilization
 * @property string $EstimatedMonthlySavingsAmount
 * @property string $CurrentMinimumHourlyOnDemandSpend
 * @property string $CurrentMaximumHourlyOnDemandSpend
 * @property string $CurrentAverageHourlyOnDemandSpend
 * @property string $RecommendationDetailId
 */
class SavingsPlansPurchaseRecommendationDetail extends Shape
{
    /**
     * @param array{
     *     SavingsPlansDetails?: SavingsPlansDetails,
     *     AccountId?: string,
     *     UpfrontCost?: string,
     *     EstimatedROI?: string,
     *     CurrencyCode?: string,
     *     EstimatedSPCost?: string,
     *     EstimatedOnDemandCost?: string,
     *     EstimatedOnDemandCostWithCurrentCommitment?: string,
     *     EstimatedSavingsAmount?: string,
     *     EstimatedSavingsPercentage?: string,
     *     HourlyCommitmentToPurchase?: string,
     *     EstimatedAverageUtilization?: string,
     *     EstimatedMonthlySavingsAmount?: string,
     *     CurrentMinimumHourlyOnDemandSpend?: string,
     *     CurrentMaximumHourlyOnDemandSpend?: string,
     *     CurrentAverageHourlyOnDemandSpend?: string,
     *     RecommendationDetailId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
