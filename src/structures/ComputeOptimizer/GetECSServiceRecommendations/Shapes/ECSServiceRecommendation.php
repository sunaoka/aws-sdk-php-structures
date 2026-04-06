<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceArn
 * @property string|null $accountId
 * @property ServiceConfiguration|null $currentServiceConfiguration
 * @property list<ECSServiceUtilizationMetric>|null $utilizationMetrics
 * @property double|null $lookbackPeriodInDays
 * @property 'EC2'|'Fargate'|null $launchType
 * @property \Aws\Api\DateTimeResult|null $lastRefreshTimestamp
 * @property 'Optimized'|'Underprovisioned'|'Overprovisioned'|null $finding
 * @property list<'MemoryOverprovisioned'|'MemoryUnderprovisioned'|'CPUOverprovisioned'|'CPUUnderprovisioned'>|null $findingReasonCodes
 * @property list<ECSServiceRecommendationOption>|null $serviceRecommendationOptions
 * @property 'VeryLow'|'Low'|'Medium'|'High'|null $currentPerformanceRisk
 * @property ECSEffectiveRecommendationPreferences|null $effectiveRecommendationPreferences
 * @property list<Tag>|null $tags
 */
class ECSServiceRecommendation extends Shape
{
    /**
     * @param array{
     *     serviceArn?: string|null,
     *     accountId?: string|null,
     *     currentServiceConfiguration?: ServiceConfiguration|null,
     *     utilizationMetrics?: list<ECSServiceUtilizationMetric>|null,
     *     lookbackPeriodInDays?: double|null,
     *     launchType?: 'EC2'|'Fargate'|null,
     *     lastRefreshTimestamp?: \Aws\Api\DateTimeResult|null,
     *     finding?: 'Optimized'|'Underprovisioned'|'Overprovisioned'|null,
     *     findingReasonCodes?: list<'MemoryOverprovisioned'|'MemoryUnderprovisioned'|'CPUOverprovisioned'|'CPUUnderprovisioned'>|null,
     *     serviceRecommendationOptions?: list<ECSServiceRecommendationOption>|null,
     *     currentPerformanceRisk?: 'VeryLow'|'Low'|'Medium'|'High'|null,
     *     effectiveRecommendationPreferences?: ECSEffectiveRecommendationPreferences|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
