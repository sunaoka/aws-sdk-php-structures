<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCommitmentPurchaseAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CurrencyCode
 * @property string $LookbackPeriodInHours
 * @property string $CurrentAverageCoverage
 * @property string $CurrentAverageHourlyOnDemandSpend
 * @property string $CurrentMaximumHourlyOnDemandSpend
 * @property string $CurrentMinimumHourlyOnDemandSpend
 * @property string $CurrentOnDemandSpend
 * @property string $ExistingHourlyCommitment
 * @property string $HourlyCommitmentToPurchase
 * @property string $EstimatedAverageCoverage
 * @property string $EstimatedAverageUtilization
 * @property string $EstimatedMonthlySavingsAmount
 * @property string $EstimatedOnDemandCost
 * @property string $EstimatedOnDemandCostWithCurrentCommitment
 * @property string $EstimatedROI
 * @property string $EstimatedSavingsAmount
 * @property string $EstimatedSavingsPercentage
 * @property string $EstimatedCommitmentCost
 * @property string $LatestUsageTimestamp
 * @property string $UpfrontCost
 * @property string $AdditionalMetadata
 * @property list<RecommendationDetailHourlyMetrics> $MetricsOverLookbackPeriod
 */
class SavingsPlansPurchaseAnalysisDetails extends Shape
{
    /**
     * @param array{
     *     CurrencyCode?: string,
     *     LookbackPeriodInHours?: string,
     *     CurrentAverageCoverage?: string,
     *     CurrentAverageHourlyOnDemandSpend?: string,
     *     CurrentMaximumHourlyOnDemandSpend?: string,
     *     CurrentMinimumHourlyOnDemandSpend?: string,
     *     CurrentOnDemandSpend?: string,
     *     ExistingHourlyCommitment?: string,
     *     HourlyCommitmentToPurchase?: string,
     *     EstimatedAverageCoverage?: string,
     *     EstimatedAverageUtilization?: string,
     *     EstimatedMonthlySavingsAmount?: string,
     *     EstimatedOnDemandCost?: string,
     *     EstimatedOnDemandCostWithCurrentCommitment?: string,
     *     EstimatedROI?: string,
     *     EstimatedSavingsAmount?: string,
     *     EstimatedSavingsPercentage?: string,
     *     EstimatedCommitmentCost?: string,
     *     LatestUsageTimestamp?: string,
     *     UpfrontCost?: string,
     *     AdditionalMetadata?: string,
     *     MetricsOverLookbackPeriod?: list<RecommendationDetailHourlyMetrics>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
