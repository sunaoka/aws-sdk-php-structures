<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlanPurchaseRecommendationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PAYER'|'LINKED' $AccountScope
 * @property 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS' $LookbackPeriodInDays
 * @property 'COMPUTE_SP'|'EC2_INSTANCE_SP'|'SAGEMAKER_SP' $SavingsPlansType
 * @property 'ONE_YEAR'|'THREE_YEARS' $TermInYears
 * @property 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION' $PaymentOption
 * @property string $AccountId
 * @property string $CurrencyCode
 * @property string $InstanceFamily
 * @property string $Region
 * @property string $OfferingId
 * @property string $GenerationTimestamp
 * @property string $LatestUsageTimestamp
 * @property string $CurrentAverageHourlyOnDemandSpend
 * @property string $CurrentMaximumHourlyOnDemandSpend
 * @property string $CurrentMinimumHourlyOnDemandSpend
 * @property string $EstimatedAverageUtilization
 * @property string $EstimatedMonthlySavingsAmount
 * @property string $EstimatedOnDemandCost
 * @property string $EstimatedOnDemandCostWithCurrentCommitment
 * @property string $EstimatedROI
 * @property string $EstimatedSPCost
 * @property string $EstimatedSavingsAmount
 * @property string $EstimatedSavingsPercentage
 * @property string $ExistingHourlyCommitment
 * @property string $HourlyCommitmentToPurchase
 * @property string $UpfrontCost
 * @property string $CurrentAverageCoverage
 * @property string $EstimatedAverageCoverage
 * @property list<RecommendationDetailHourlyMetrics> $MetricsOverLookbackPeriod
 */
class RecommendationDetailData extends Shape
{
    /**
     * @param array{
     *     AccountScope?: 'PAYER'|'LINKED',
     *     LookbackPeriodInDays?: 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS',
     *     SavingsPlansType?: 'COMPUTE_SP'|'EC2_INSTANCE_SP'|'SAGEMAKER_SP',
     *     TermInYears?: 'ONE_YEAR'|'THREE_YEARS',
     *     PaymentOption?: 'NO_UPFRONT'|'PARTIAL_UPFRONT'|'ALL_UPFRONT'|'LIGHT_UTILIZATION'|'MEDIUM_UTILIZATION'|'HEAVY_UTILIZATION',
     *     AccountId?: string,
     *     CurrencyCode?: string,
     *     InstanceFamily?: string,
     *     Region?: string,
     *     OfferingId?: string,
     *     GenerationTimestamp?: string,
     *     LatestUsageTimestamp?: string,
     *     CurrentAverageHourlyOnDemandSpend?: string,
     *     CurrentMaximumHourlyOnDemandSpend?: string,
     *     CurrentMinimumHourlyOnDemandSpend?: string,
     *     EstimatedAverageUtilization?: string,
     *     EstimatedMonthlySavingsAmount?: string,
     *     EstimatedOnDemandCost?: string,
     *     EstimatedOnDemandCostWithCurrentCommitment?: string,
     *     EstimatedROI?: string,
     *     EstimatedSPCost?: string,
     *     EstimatedSavingsAmount?: string,
     *     EstimatedSavingsPercentage?: string,
     *     ExistingHourlyCommitment?: string,
     *     HourlyCommitmentToPurchase?: string,
     *     UpfrontCost?: string,
     *     CurrentAverageCoverage?: string,
     *     EstimatedAverageCoverage?: string,
     *     MetricsOverLookbackPeriod?: list<RecommendationDetailHourlyMetrics>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
