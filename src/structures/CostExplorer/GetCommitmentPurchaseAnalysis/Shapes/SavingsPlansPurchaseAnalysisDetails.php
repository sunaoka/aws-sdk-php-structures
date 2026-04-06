<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCommitmentPurchaseAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CurrencyCode
 * @property string|null $LookbackPeriodInHours
 * @property string|null $CurrentAverageCoverage
 * @property string|null $CurrentAverageHourlyOnDemandSpend
 * @property string|null $CurrentMaximumHourlyOnDemandSpend
 * @property string|null $CurrentMinimumHourlyOnDemandSpend
 * @property string|null $CurrentOnDemandSpend
 * @property string|null $ExistingHourlyCommitment
 * @property string|null $HourlyCommitmentToPurchase
 * @property string|null $EstimatedAverageCoverage
 * @property string|null $EstimatedAverageUtilization
 * @property string|null $EstimatedMonthlySavingsAmount
 * @property string|null $EstimatedOnDemandCost
 * @property string|null $EstimatedOnDemandCostWithCurrentCommitment
 * @property string|null $EstimatedROI
 * @property string|null $EstimatedSavingsAmount
 * @property string|null $EstimatedSavingsPercentage
 * @property string|null $EstimatedCommitmentCost
 * @property string|null $LatestUsageTimestamp
 * @property string|null $UpfrontCost
 * @property string|null $AdditionalMetadata
 * @property list<RecommendationDetailHourlyMetrics>|null $MetricsOverLookbackPeriod
 */
class SavingsPlansPurchaseAnalysisDetails extends Shape
{
    /**
     * @param array{
     *     CurrencyCode?: string|null,
     *     LookbackPeriodInHours?: string|null,
     *     CurrentAverageCoverage?: string|null,
     *     CurrentAverageHourlyOnDemandSpend?: string|null,
     *     CurrentMaximumHourlyOnDemandSpend?: string|null,
     *     CurrentMinimumHourlyOnDemandSpend?: string|null,
     *     CurrentOnDemandSpend?: string|null,
     *     ExistingHourlyCommitment?: string|null,
     *     HourlyCommitmentToPurchase?: string|null,
     *     EstimatedAverageCoverage?: string|null,
     *     EstimatedAverageUtilization?: string|null,
     *     EstimatedMonthlySavingsAmount?: string|null,
     *     EstimatedOnDemandCost?: string|null,
     *     EstimatedOnDemandCostWithCurrentCommitment?: string|null,
     *     EstimatedROI?: string|null,
     *     EstimatedSavingsAmount?: string|null,
     *     EstimatedSavingsPercentage?: string|null,
     *     EstimatedCommitmentCost?: string|null,
     *     LatestUsageTimestamp?: string|null,
     *     UpfrontCost?: string|null,
     *     AdditionalMetadata?: string|null,
     *     MetricsOverLookbackPeriod?: list<RecommendationDetailHourlyMetrics>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
