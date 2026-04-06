<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportEBSVolumeRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $accountIds
 * @property list<Shapes\EBSFilter>|null $filters
 * @property list<'AccountId'|'VolumeArn'|'Finding'|'UtilizationMetricsVolumeReadOpsPerSecondMaximum'|'UtilizationMetricsVolumeWriteOpsPerSecondMaximum'|'UtilizationMetricsVolumeReadBytesPerSecondMaximum'|'UtilizationMetricsVolumeWriteBytesPerSecondMaximum'|'LookbackPeriodInDays'|'CurrentConfigurationVolumeType'|'CurrentConfigurationVolumeBaselineIOPS'|'CurrentConfigurationVolumeBaselineThroughput'|'CurrentConfigurationVolumeBurstIOPS'|'CurrentConfigurationVolumeBurstThroughput'|'CurrentConfigurationVolumeSize'|'CurrentMonthlyPrice'|'RecommendationOptionsConfigurationVolumeType'|'RecommendationOptionsConfigurationVolumeBaselineIOPS'|'RecommendationOptionsConfigurationVolumeBaselineThroughput'|'RecommendationOptionsConfigurationVolumeBurstIOPS'|'RecommendationOptionsConfigurationVolumeBurstThroughput'|'RecommendationOptionsConfigurationVolumeSize'|'RecommendationOptionsMonthlyPrice'|'RecommendationOptionsPerformanceRisk'|'LastRefreshTimestamp'|'CurrentPerformanceRisk'|'RecommendationOptionsSavingsOpportunityPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrency'|'RecommendationOptionsEstimatedMonthlySavingsValue'|'Tags'|'RootVolume'|'CurrentConfigurationRootVolume'|'EffectiveRecommendationPreferencesSavingsEstimationMode'|'RecommendationOptionsSavingsOpportunityAfterDiscountsPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrencyAfterDiscounts'|'RecommendationOptionsEstimatedMonthlySavingsValueAfterDiscounts'>|null $fieldsToExport
 * @property Shapes\S3DestinationConfig $s3DestinationConfig
 * @property 'Csv'|null $fileFormat
 * @property bool|null $includeMemberAccounts
 */
class ExportEBSVolumeRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>|null,
     *     filters?: list<Shapes\EBSFilter>|null,
     *     fieldsToExport?: list<'AccountId'|'VolumeArn'|'Finding'|'UtilizationMetricsVolumeReadOpsPerSecondMaximum'|'UtilizationMetricsVolumeWriteOpsPerSecondMaximum'|'UtilizationMetricsVolumeReadBytesPerSecondMaximum'|'UtilizationMetricsVolumeWriteBytesPerSecondMaximum'|'LookbackPeriodInDays'|'CurrentConfigurationVolumeType'|'CurrentConfigurationVolumeBaselineIOPS'|'CurrentConfigurationVolumeBaselineThroughput'|'CurrentConfigurationVolumeBurstIOPS'|'CurrentConfigurationVolumeBurstThroughput'|'CurrentConfigurationVolumeSize'|'CurrentMonthlyPrice'|'RecommendationOptionsConfigurationVolumeType'|'RecommendationOptionsConfigurationVolumeBaselineIOPS'|'RecommendationOptionsConfigurationVolumeBaselineThroughput'|'RecommendationOptionsConfigurationVolumeBurstIOPS'|'RecommendationOptionsConfigurationVolumeBurstThroughput'|'RecommendationOptionsConfigurationVolumeSize'|'RecommendationOptionsMonthlyPrice'|'RecommendationOptionsPerformanceRisk'|'LastRefreshTimestamp'|'CurrentPerformanceRisk'|'RecommendationOptionsSavingsOpportunityPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrency'|'RecommendationOptionsEstimatedMonthlySavingsValue'|'Tags'|'RootVolume'|'CurrentConfigurationRootVolume'|'EffectiveRecommendationPreferencesSavingsEstimationMode'|'RecommendationOptionsSavingsOpportunityAfterDiscountsPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrencyAfterDiscounts'|'RecommendationOptionsEstimatedMonthlySavingsValueAfterDiscounts'>|null,
     *     s3DestinationConfig: Shapes\S3DestinationConfig,
     *     fileFormat?: 'Csv'|null,
     *     includeMemberAccounts?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
