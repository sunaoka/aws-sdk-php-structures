<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportEBSVolumeRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 * @property list<Shapes\EBSFilter> $filters
 * @property list<'AccountId'|'VolumeArn'|'Finding'|'UtilizationMetricsVolumeReadOpsPerSecondMaximum'|'UtilizationMetricsVolumeWriteOpsPerSecondMaximum'|'UtilizationMetricsVolumeReadBytesPerSecondMaximum'|'UtilizationMetricsVolumeWriteBytesPerSecondMaximum'|'LookbackPeriodInDays'|'CurrentConfigurationVolumeType'|'CurrentConfigurationVolumeBaselineIOPS'|'CurrentConfigurationVolumeBaselineThroughput'|'CurrentConfigurationVolumeBurstIOPS'|'CurrentConfigurationVolumeBurstThroughput'|'CurrentConfigurationVolumeSize'|'CurrentMonthlyPrice'|'RecommendationOptionsConfigurationVolumeType'|'RecommendationOptionsConfigurationVolumeBaselineIOPS'|'RecommendationOptionsConfigurationVolumeBaselineThroughput'|'RecommendationOptionsConfigurationVolumeBurstIOPS'|'RecommendationOptionsConfigurationVolumeBurstThroughput'|'RecommendationOptionsConfigurationVolumeSize'|'RecommendationOptionsMonthlyPrice'|'RecommendationOptionsPerformanceRisk'|'LastRefreshTimestamp'|'CurrentPerformanceRisk'|'RecommendationOptionsSavingsOpportunityPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrency'|'RecommendationOptionsEstimatedMonthlySavingsValue'|'Tags'|'RootVolume'|'CurrentConfigurationRootVolume'|'EffectiveRecommendationPreferencesSavingsEstimationMode'|'RecommendationOptionsSavingsOpportunityAfterDiscountsPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrencyAfterDiscounts'|'RecommendationOptionsEstimatedMonthlySavingsValueAfterDiscounts'> $fieldsToExport
 * @property Shapes\S3DestinationConfig $s3DestinationConfig
 * @property 'Csv' $fileFormat
 * @property bool $includeMemberAccounts
 */
class ExportEBSVolumeRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>,
     *     filters?: list<Shapes\EBSFilter>,
     *     fieldsToExport?: list<'AccountId'|'VolumeArn'|'Finding'|'UtilizationMetricsVolumeReadOpsPerSecondMaximum'|'UtilizationMetricsVolumeWriteOpsPerSecondMaximum'|'UtilizationMetricsVolumeReadBytesPerSecondMaximum'|'UtilizationMetricsVolumeWriteBytesPerSecondMaximum'|'LookbackPeriodInDays'|'CurrentConfigurationVolumeType'|'CurrentConfigurationVolumeBaselineIOPS'|'CurrentConfigurationVolumeBaselineThroughput'|'CurrentConfigurationVolumeBurstIOPS'|'CurrentConfigurationVolumeBurstThroughput'|'CurrentConfigurationVolumeSize'|'CurrentMonthlyPrice'|'RecommendationOptionsConfigurationVolumeType'|'RecommendationOptionsConfigurationVolumeBaselineIOPS'|'RecommendationOptionsConfigurationVolumeBaselineThroughput'|'RecommendationOptionsConfigurationVolumeBurstIOPS'|'RecommendationOptionsConfigurationVolumeBurstThroughput'|'RecommendationOptionsConfigurationVolumeSize'|'RecommendationOptionsMonthlyPrice'|'RecommendationOptionsPerformanceRisk'|'LastRefreshTimestamp'|'CurrentPerformanceRisk'|'RecommendationOptionsSavingsOpportunityPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrency'|'RecommendationOptionsEstimatedMonthlySavingsValue'|'Tags'|'RootVolume'|'CurrentConfigurationRootVolume'|'EffectiveRecommendationPreferencesSavingsEstimationMode'|'RecommendationOptionsSavingsOpportunityAfterDiscountsPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrencyAfterDiscounts'|'RecommendationOptionsEstimatedMonthlySavingsValueAfterDiscounts'>,
     *     s3DestinationConfig: Shapes\S3DestinationConfig,
     *     fileFormat?: 'Csv',
     *     includeMemberAccounts?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
