<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportECSServiceRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $accountIds
 * @property list<Shapes\ECSServiceRecommendationFilter>|null $filters
 * @property list<'AccountId'|'ServiceArn'|'LookbackPeriodInDays'|'LastRefreshTimestamp'|'LaunchType'|'CurrentPerformanceRisk'|'CurrentServiceConfigurationMemory'|'CurrentServiceConfigurationCpu'|'CurrentServiceConfigurationTaskDefinitionArn'|'CurrentServiceConfigurationAutoScalingConfiguration'|'CurrentServiceContainerConfigurations'|'UtilizationMetricsCpuMaximum'|'UtilizationMetricsMemoryMaximum'|'Finding'|'FindingReasonCodes'|'RecommendationOptionsMemory'|'RecommendationOptionsCpu'|'RecommendationOptionsSavingsOpportunityPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrency'|'RecommendationOptionsEstimatedMonthlySavingsValue'|'RecommendationOptionsContainerRecommendations'|'RecommendationOptionsProjectedUtilizationMetricsCpuMaximum'|'RecommendationOptionsProjectedUtilizationMetricsMemoryMaximum'|'Tags'|'EffectiveRecommendationPreferencesSavingsEstimationMode'|'RecommendationOptionsSavingsOpportunityAfterDiscountsPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrencyAfterDiscounts'|'RecommendationOptionsEstimatedMonthlySavingsValueAfterDiscounts'>|null $fieldsToExport
 * @property Shapes\S3DestinationConfig $s3DestinationConfig
 * @property 'Csv'|null $fileFormat
 * @property bool|null $includeMemberAccounts
 */
class ExportECSServiceRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>|null,
     *     filters?: list<Shapes\ECSServiceRecommendationFilter>|null,
     *     fieldsToExport?: list<'AccountId'|'ServiceArn'|'LookbackPeriodInDays'|'LastRefreshTimestamp'|'LaunchType'|'CurrentPerformanceRisk'|'CurrentServiceConfigurationMemory'|'CurrentServiceConfigurationCpu'|'CurrentServiceConfigurationTaskDefinitionArn'|'CurrentServiceConfigurationAutoScalingConfiguration'|'CurrentServiceContainerConfigurations'|'UtilizationMetricsCpuMaximum'|'UtilizationMetricsMemoryMaximum'|'Finding'|'FindingReasonCodes'|'RecommendationOptionsMemory'|'RecommendationOptionsCpu'|'RecommendationOptionsSavingsOpportunityPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrency'|'RecommendationOptionsEstimatedMonthlySavingsValue'|'RecommendationOptionsContainerRecommendations'|'RecommendationOptionsProjectedUtilizationMetricsCpuMaximum'|'RecommendationOptionsProjectedUtilizationMetricsMemoryMaximum'|'Tags'|'EffectiveRecommendationPreferencesSavingsEstimationMode'|'RecommendationOptionsSavingsOpportunityAfterDiscountsPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrencyAfterDiscounts'|'RecommendationOptionsEstimatedMonthlySavingsValueAfterDiscounts'>|null,
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
