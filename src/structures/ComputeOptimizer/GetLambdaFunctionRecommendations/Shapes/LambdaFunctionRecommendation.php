<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLambdaFunctionRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $functionArn
 * @property string $functionVersion
 * @property string $accountId
 * @property int $currentMemorySize
 * @property int $numberOfInvocations
 * @property list<LambdaFunctionUtilizationMetric> $utilizationMetrics
 * @property double $lookbackPeriodInDays
 * @property \Aws\Api\DateTimeResult $lastRefreshTimestamp
 * @property 'Optimized'|'NotOptimized'|'Unavailable' $finding
 * @property list<'MemoryOverprovisioned'|'MemoryUnderprovisioned'|'InsufficientData'|'Inconclusive'> $findingReasonCodes
 * @property list<LambdaFunctionMemoryRecommendationOption> $memorySizeRecommendationOptions
 * @property 'VeryLow'|'Low'|'Medium'|'High' $currentPerformanceRisk
 * @property LambdaEffectiveRecommendationPreferences $effectiveRecommendationPreferences
 * @property list<Tag> $tags
 */
class LambdaFunctionRecommendation extends Shape
{
    /**
     * @param array{
     *     functionArn?: string,
     *     functionVersion?: string,
     *     accountId?: string,
     *     currentMemorySize?: int,
     *     numberOfInvocations?: int,
     *     utilizationMetrics?: list<LambdaFunctionUtilizationMetric>,
     *     lookbackPeriodInDays?: double,
     *     lastRefreshTimestamp?: \Aws\Api\DateTimeResult,
     *     finding?: 'Optimized'|'NotOptimized'|'Unavailable',
     *     findingReasonCodes?: list<'MemoryOverprovisioned'|'MemoryUnderprovisioned'|'InsufficientData'|'Inconclusive'>,
     *     memorySizeRecommendationOptions?: list<LambdaFunctionMemoryRecommendationOption>,
     *     currentPerformanceRisk?: 'VeryLow'|'Low'|'Medium'|'High',
     *     effectiveRecommendationPreferences?: LambdaEffectiveRecommendationPreferences,
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
