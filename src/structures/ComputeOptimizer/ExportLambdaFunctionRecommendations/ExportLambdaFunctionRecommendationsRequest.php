<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportLambdaFunctionRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $accountIds
 * @property list<Shapes\LambdaFunctionRecommendationFilter>|null $filters
 * @property list<'AccountId'|'FunctionArn'|'FunctionVersion'|'Finding'|'FindingReasonCodes'|'NumberOfInvocations'|'UtilizationMetricsDurationMaximum'|'UtilizationMetricsDurationAverage'|'UtilizationMetricsMemoryMaximum'|'UtilizationMetricsMemoryAverage'|'LookbackPeriodInDays'|'CurrentConfigurationMemorySize'|'CurrentConfigurationTimeout'|'CurrentCostTotal'|'CurrentCostAverage'|'RecommendationOptionsConfigurationMemorySize'|'RecommendationOptionsCostLow'|'RecommendationOptionsCostHigh'|'RecommendationOptionsProjectedUtilizationMetricsDurationLowerBound'|'RecommendationOptionsProjectedUtilizationMetricsDurationUpperBound'|'RecommendationOptionsProjectedUtilizationMetricsDurationExpected'|'LastRefreshTimestamp'|'CurrentPerformanceRisk'|'RecommendationOptionsSavingsOpportunityPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrency'|'RecommendationOptionsEstimatedMonthlySavingsValue'|'Tags'|'EffectiveRecommendationPreferencesSavingsEstimationMode'|'RecommendationOptionsSavingsOpportunityAfterDiscountsPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrencyAfterDiscounts'|'RecommendationOptionsEstimatedMonthlySavingsValueAfterDiscounts'>|null $fieldsToExport
 * @property Shapes\S3DestinationConfig $s3DestinationConfig
 * @property 'Csv'|null $fileFormat
 * @property bool|null $includeMemberAccounts
 */
class ExportLambdaFunctionRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<string>|null,
     *     filters?: list<Shapes\LambdaFunctionRecommendationFilter>|null,
     *     fieldsToExport?: list<'AccountId'|'FunctionArn'|'FunctionVersion'|'Finding'|'FindingReasonCodes'|'NumberOfInvocations'|'UtilizationMetricsDurationMaximum'|'UtilizationMetricsDurationAverage'|'UtilizationMetricsMemoryMaximum'|'UtilizationMetricsMemoryAverage'|'LookbackPeriodInDays'|'CurrentConfigurationMemorySize'|'CurrentConfigurationTimeout'|'CurrentCostTotal'|'CurrentCostAverage'|'RecommendationOptionsConfigurationMemorySize'|'RecommendationOptionsCostLow'|'RecommendationOptionsCostHigh'|'RecommendationOptionsProjectedUtilizationMetricsDurationLowerBound'|'RecommendationOptionsProjectedUtilizationMetricsDurationUpperBound'|'RecommendationOptionsProjectedUtilizationMetricsDurationExpected'|'LastRefreshTimestamp'|'CurrentPerformanceRisk'|'RecommendationOptionsSavingsOpportunityPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrency'|'RecommendationOptionsEstimatedMonthlySavingsValue'|'Tags'|'EffectiveRecommendationPreferencesSavingsEstimationMode'|'RecommendationOptionsSavingsOpportunityAfterDiscountsPercentage'|'RecommendationOptionsEstimatedMonthlySavingsCurrencyAfterDiscounts'|'RecommendationOptionsEstimatedMonthlySavingsValueAfterDiscounts'>|null,
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
