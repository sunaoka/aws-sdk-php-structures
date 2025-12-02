<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlanPurchaseRecommendationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PAYER'|'LINKED'|null $AccountScope
 * @property 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS'|null $LookbackPeriodInDays
 * @property 'COMPUTE_SP'|'EC2_INSTANCE_SP'|'SAGEMAKER_SP'|'DATABASE_SP'|null $SavingsPlansType
 * @property 'ONE_YEAR'|'THREE_YEARS'|null $TermInYears
 * @property 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION'|null $PaymentOption
 * @property string|null $AccountId
 * @property string|null $CurrencyCode
 * @property string|null $InstanceFamily
 * @property string|null $Region
 * @property string|null $OfferingId
 * @property string|null $GenerationTimestamp
 * @property string|null $LatestUsageTimestamp
 * @property string|null $CurrentAverageHourlyOnDemandSpend
 * @property string|null $CurrentMaximumHourlyOnDemandSpend
 * @property string|null $CurrentMinimumHourlyOnDemandSpend
 * @property string|null $EstimatedAverageUtilization
 * @property string|null $EstimatedMonthlySavingsAmount
 * @property string|null $EstimatedOnDemandCost
 * @property string|null $EstimatedOnDemandCostWithCurrentCommitment
 * @property string|null $EstimatedROI
 * @property string|null $EstimatedSPCost
 * @property string|null $EstimatedSavingsAmount
 * @property string|null $EstimatedSavingsPercentage
 * @property string|null $ExistingHourlyCommitment
 * @property string|null $HourlyCommitmentToPurchase
 * @property string|null $UpfrontCost
 * @property string|null $CurrentAverageCoverage
 * @property string|null $EstimatedAverageCoverage
 * @property list<RecommendationDetailHourlyMetrics>|null $MetricsOverLookbackPeriod
 */
class RecommendationDetailData extends Shape
{
    /**
     * @param array{
     *     AccountScope?: 'PAYER'|'LINKED'|null,
     *     LookbackPeriodInDays?: 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS'|null,
     *     SavingsPlansType?: 'COMPUTE_SP'|'EC2_INSTANCE_SP'|'SAGEMAKER_SP'|'DATABASE_SP'|null,
     *     TermInYears?: 'ONE_YEAR'|'THREE_YEARS'|null,
     *     PaymentOption?: 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION'|null,
     *     AccountId?: string|null,
     *     CurrencyCode?: string|null,
     *     InstanceFamily?: string|null,
     *     Region?: string|null,
     *     OfferingId?: string|null,
     *     GenerationTimestamp?: string|null,
     *     LatestUsageTimestamp?: string|null,
     *     CurrentAverageHourlyOnDemandSpend?: string|null,
     *     CurrentMaximumHourlyOnDemandSpend?: string|null,
     *     CurrentMinimumHourlyOnDemandSpend?: string|null,
     *     EstimatedAverageUtilization?: string|null,
     *     EstimatedMonthlySavingsAmount?: string|null,
     *     EstimatedOnDemandCost?: string|null,
     *     EstimatedOnDemandCostWithCurrentCommitment?: string|null,
     *     EstimatedROI?: string|null,
     *     EstimatedSPCost?: string|null,
     *     EstimatedSavingsAmount?: string|null,
     *     EstimatedSavingsPercentage?: string|null,
     *     ExistingHourlyCommitment?: string|null,
     *     HourlyCommitmentToPurchase?: string|null,
     *     UpfrontCost?: string|null,
     *     CurrentAverageCoverage?: string|null,
     *     EstimatedAverageCoverage?: string|null,
     *     MetricsOverLookbackPeriod?: list<RecommendationDetailHourlyMetrics>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
