<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEBSVolumeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $volumeArn
 * @property string|null $accountId
 * @property VolumeConfiguration|null $currentConfiguration
 * @property 'Optimized'|'NotOptimized'|null $finding
 * @property list<EBSUtilizationMetric>|null $utilizationMetrics
 * @property double|null $lookBackPeriodInDays
 * @property list<VolumeRecommendationOption>|null $volumeRecommendationOptions
 * @property \Aws\Api\DateTimeResult|null $lastRefreshTimestamp
 * @property 'VeryLow'|'Low'|'Medium'|'High'|null $currentPerformanceRisk
 * @property EBSEffectiveRecommendationPreferences|null $effectiveRecommendationPreferences
 * @property list<Tag>|null $tags
 */
class VolumeRecommendation extends Shape
{
    /**
     * @param array{
     *     volumeArn?: string|null,
     *     accountId?: string|null,
     *     currentConfiguration?: VolumeConfiguration|null,
     *     finding?: 'Optimized'|'NotOptimized'|null,
     *     utilizationMetrics?: list<EBSUtilizationMetric>|null,
     *     lookBackPeriodInDays?: double|null,
     *     volumeRecommendationOptions?: list<VolumeRecommendationOption>|null,
     *     lastRefreshTimestamp?: \Aws\Api\DateTimeResult|null,
     *     currentPerformanceRisk?: 'VeryLow'|'Low'|'Medium'|'High'|null,
     *     effectiveRecommendationPreferences?: EBSEffectiveRecommendationPreferences|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
