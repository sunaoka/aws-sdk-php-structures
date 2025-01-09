<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportLambdaFunctionRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 * @property list<Shapes\LambdaFunctionRecommendationFilter> $filters
 * @property list<'AccountId'|'FunctionArn'|'FunctionVersion'|'Finding'|'FindingReasonCodes'|'NumberOfInvocations'|'UtilizationMetricsDurationMaximum'|'UtilizationMetricsDurationAverage'|'UtilizationMetricsMemoryMaximum'|'UtilizationMetricsMemoryAverage'|'LookbackPeriodInDays'|'CurrentConfigurationMemorySize'|'CurrentConfigurationTimeout'|'CurrentCostTotal'|'CurrentCostAverage'|'RecommendationOptionsConfigurationMemorySize'|'RecommendationOptionsCostLow'|'RecommendationOptionsCostHigh'|'RecommendationOptionsProjectedUtilizationMetricsDurationLowerBound'|'RecommendationOptionsProjectedUtilizationMetricsDurationUpperBound'|'RecommendationOptionsProjectedUtilizationMetricsDurationExpected'|'LastRefreshTimestamp'|'CurrentPerformanceRisk'|'RecommendationOptionsSavingsOpportunityPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrency'|'RecommendationOptionsEstimatedMonthlySavingsValue'|'Tags'|'EffectiveRecommendationPreferencesSavingsEstimationMode'|'RecommendationOptionsSavingsOpportunityAfterDiscountsPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrencyAfterDiscounts'|'RecommendationOptionsEstimatedMonthlySavingsValueAfterDiscounts'> $fieldsToExport
 * @property Shapes\S3DestinationConfig $s3DestinationConfig
 * @property 'Csv' $fileFormat
 * @property bool $includeMemberAccounts
 */
class ExportLambdaFunctionRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>,
     *     filters?: list<Shapes\LambdaFunctionRecommendationFilter>,
     *     fieldsToExport?: list<'AccountId'|'FunctionArn'|'FunctionVersion'|'Finding'|'FindingReasonCodes'|'NumberOfInvocations'|'UtilizationMetricsDurationMaximum'|'UtilizationMetricsDurationAverage'|'UtilizationMetricsMemoryMaximum'|'UtilizationMetricsMemoryAverage'|'LookbackPeriodInDays'|'CurrentConfigurationMemorySize'|'CurrentConfigurationTimeout'|'CurrentCostTotal'|'CurrentCostAverage'|'RecommendationOptionsConfigurationMemorySize'|'RecommendationOptionsCostLow'|'RecommendationOptionsCostHigh'|'RecommendationOptionsProjectedUtilizationMetricsDurationLowerBound'|'RecommendationOptionsProjectedUtilizationMetricsDurationUpperBound'|'RecommendationOptionsProjectedUtilizationMetricsDurationExpected'|'LastRefreshTimestamp'|'CurrentPerformanceRisk'|'RecommendationOptionsSavingsOpportunityPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrency'|'RecommendationOptionsEstimatedMonthlySavingsValue'|'Tags'|'EffectiveRecommendationPreferencesSavingsEstimationMode'|'RecommendationOptionsSavingsOpportunityAfterDiscountsPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrencyAfterDiscounts'|'RecommendationOptionsEstimatedMonthlySavingsValueAfterDiscounts'>,
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
