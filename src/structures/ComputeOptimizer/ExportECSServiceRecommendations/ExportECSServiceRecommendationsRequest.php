<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportECSServiceRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 * @property list<Shapes\ECSServiceRecommendationFilter> $filters
 * @property list<'AccountId'|'ServiceArn'|'LookbackPeriodInDays'|'LastRefreshTimestamp'|'LaunchType'|'CurrentPerformanceRisk'|'CurrentServiceConfigurationMemory'|'CurrentServiceConfigurationCpu'|'CurrentServiceConfigurationTaskDefinitionArn'|'CurrentServiceConfigurationAutoScalingConfiguration'|'CurrentServiceContainerConfigurations'|'UtilizationMetricsCpuMaximum'|'UtilizationMetricsMemoryMaximum'|'Finding'|'FindingReasonCodes'|'RecommendationOptionsMemory'|'RecommendationOptionsCpu'|'RecommendationOptionsSavingsOpportunityPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrency'|'RecommendationOptionsEstimatedMonthlySavingsValue'|'RecommendationOptionsContainerRecommendations'|'RecommendationOptionsProjectedUtilizationMetricsCpuMaximum'|'RecommendationOptionsProjectedUtilizationMetricsMemoryMaximum'|'Tags'|'EffectiveRecommendationPreferencesSavingsEstimationMode'|'RecommendationOptionsSavingsOpportunityAfterDiscountsPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrencyAfterDiscounts'|'RecommendationOptionsEstimatedMonthlySavingsValueAfterDiscounts'> $fieldsToExport
 * @property Shapes\S3DestinationConfig $s3DestinationConfig
 * @property 'Csv' $fileFormat
 * @property bool $includeMemberAccounts
 */
class ExportECSServiceRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>,
     *     filters?: list<Shapes\ECSServiceRecommendationFilter>,
     *     fieldsToExport?: list<'AccountId'|'ServiceArn'|'LookbackPeriodInDays'|'LastRefreshTimestamp'|'LaunchType'|'CurrentPerformanceRisk'|'CurrentServiceConfigurationMemory'|'CurrentServiceConfigurationCpu'|'CurrentServiceConfigurationTaskDefinitionArn'|'CurrentServiceConfigurationAutoScalingConfiguration'|'CurrentServiceContainerConfigurations'|'UtilizationMetricsCpuMaximum'|'UtilizationMetricsMemoryMaximum'|'Finding'|'FindingReasonCodes'|'RecommendationOptionsMemory'|'RecommendationOptionsCpu'|'RecommendationOptionsSavingsOpportunityPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrency'|'RecommendationOptionsEstimatedMonthlySavingsValue'|'RecommendationOptionsContainerRecommendations'|'RecommendationOptionsProjectedUtilizationMetricsCpuMaximum'|'RecommendationOptionsProjectedUtilizationMetricsMemoryMaximum'|'Tags'|'EffectiveRecommendationPreferencesSavingsEstimationMode'|'RecommendationOptionsSavingsOpportunityAfterDiscountsPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrencyAfterDiscounts'|'RecommendationOptionsEstimatedMonthlySavingsValueAfterDiscounts'>,
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
