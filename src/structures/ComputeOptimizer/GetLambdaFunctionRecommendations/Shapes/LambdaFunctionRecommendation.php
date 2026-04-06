<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLambdaFunctionRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $functionArn
 * @property string|null $functionVersion
 * @property string|null $accountId
 * @property int|null $currentMemorySize
 * @property int|null $numberOfInvocations
 * @property list<LambdaFunctionUtilizationMetric>|null $utilizationMetrics
 * @property double|null $lookbackPeriodInDays
 * @property \Aws\Api\DateTimeResult|null $lastRefreshTimestamp
 * @property 'Optimized'|'NotOptimized'|'Unavailable'|null $finding
 * @property list<'MemoryOverprovisioned'|'MemoryUnderprovisioned'|'InsufficientData'|'Inconclusive'>|null $findingReasonCodes
 * @property list<LambdaFunctionMemoryRecommendationOption>|null $memorySizeRecommendationOptions
 * @property 'VeryLow'|'Low'|'Medium'|'High'|null $currentPerformanceRisk
 * @property LambdaEffectiveRecommendationPreferences|null $effectiveRecommendationPreferences
 * @property list<Tag>|null $tags
 */
class LambdaFunctionRecommendation extends Shape
{
    /**
     * @param array{
     *     functionArn?: string|null,
     *     functionVersion?: string|null,
     *     accountId?: string|null,
     *     currentMemorySize?: int|null,
     *     numberOfInvocations?: int|null,
     *     utilizationMetrics?: list<LambdaFunctionUtilizationMetric>|null,
     *     lookbackPeriodInDays?: double|null,
     *     lastRefreshTimestamp?: \Aws\Api\DateTimeResult|null,
     *     finding?: 'Optimized'|'NotOptimized'|'Unavailable'|null,
     *     findingReasonCodes?: list<'MemoryOverprovisioned'|'MemoryUnderprovisioned'|'InsufficientData'|'Inconclusive'>|null,
     *     memorySizeRecommendationOptions?: list<LambdaFunctionMemoryRecommendationOption>|null,
     *     currentPerformanceRisk?: 'VeryLow'|'Low'|'Medium'|'High'|null,
     *     effectiveRecommendationPreferences?: LambdaEffectiveRecommendationPreferences|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
