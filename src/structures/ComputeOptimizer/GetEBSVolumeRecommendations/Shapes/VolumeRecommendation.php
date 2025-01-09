<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEBSVolumeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $volumeArn
 * @property string $accountId
 * @property VolumeConfiguration $currentConfiguration
 * @property 'Optimized'|'NotOptimized' $finding
 * @property list<EBSUtilizationMetric> $utilizationMetrics
 * @property double $lookBackPeriodInDays
 * @property list<VolumeRecommendationOption> $volumeRecommendationOptions
 * @property \Aws\Api\DateTimeResult $lastRefreshTimestamp
 * @property 'VeryLow'|'Low'|'Medium'|'High' $currentPerformanceRisk
 * @property EBSEffectiveRecommendationPreferences $effectiveRecommendationPreferences
 * @property list<Tag> $tags
 */
class VolumeRecommendation extends Shape
{
    /**
     * @param array{
     *     volumeArn?: string,
     *     accountId?: string,
     *     currentConfiguration?: VolumeConfiguration,
     *     finding?: 'Optimized'|'NotOptimized',
     *     utilizationMetrics?: list<EBSUtilizationMetric>,
     *     lookBackPeriodInDays?: double,
     *     volumeRecommendationOptions?: list<VolumeRecommendationOption>,
     *     lastRefreshTimestamp?: \Aws\Api\DateTimeResult,
     *     currentPerformanceRisk?: 'VeryLow'|'Low'|'Medium'|'High',
     *     effectiveRecommendationPreferences?: EBSEffectiveRecommendationPreferences,
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
