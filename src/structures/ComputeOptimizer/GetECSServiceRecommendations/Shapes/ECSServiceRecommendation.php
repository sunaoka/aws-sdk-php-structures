<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceArn
 * @property string $accountId
 * @property ServiceConfiguration $currentServiceConfiguration
 * @property list<ECSServiceUtilizationMetric> $utilizationMetrics
 * @property double $lookbackPeriodInDays
 * @property 'EC2'|'Fargate' $launchType
 * @property \Aws\Api\DateTimeResult $lastRefreshTimestamp
 * @property 'Optimized'|'Underprovisioned'|'Overprovisioned' $finding
 * @property list<'MemoryOverprovisioned'|'MemoryUnderprovisioned'|'CPUOverprovisioned'|'CPUUnderprovisioned'> $findingReasonCodes
 * @property list<ECSServiceRecommendationOption> $serviceRecommendationOptions
 * @property 'VeryLow'|'Low'|'Medium'|'High' $currentPerformanceRisk
 * @property ECSEffectiveRecommendationPreferences $effectiveRecommendationPreferences
 * @property list<Tag> $tags
 */
class ECSServiceRecommendation extends Shape
{
    /**
     * @param array{
     *     serviceArn?: string,
     *     accountId?: string,
     *     currentServiceConfiguration?: ServiceConfiguration,
     *     utilizationMetrics?: list<ECSServiceUtilizationMetric>,
     *     lookbackPeriodInDays?: double,
     *     launchType?: 'EC2'|'Fargate',
     *     lastRefreshTimestamp?: \Aws\Api\DateTimeResult,
     *     finding?: 'Optimized'|'Underprovisioned'|'Overprovisioned',
     *     findingReasonCodes?: list<'MemoryOverprovisioned'|'MemoryUnderprovisioned'|'CPUOverprovisioned'|'CPUUnderprovisioned'>,
     *     serviceRecommendationOptions?: list<ECSServiceRecommendationOption>,
     *     currentPerformanceRisk?: 'VeryLow'|'Low'|'Medium'|'High',
     *     effectiveRecommendationPreferences?: ECSEffectiveRecommendationPreferences,
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
