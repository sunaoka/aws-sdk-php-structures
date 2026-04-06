<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $autoScalingGroupArn
 * @property string|null $autoScalingGroupName
 * @property 'Underprovisioned'|'Overprovisioned'|'Optimized'|'NotOptimized'|null $finding
 * @property list<UtilizationMetric>|null $utilizationMetrics
 * @property double|null $lookBackPeriodInDays
 * @property AutoScalingGroupConfiguration|null $currentConfiguration
 * @property GpuInfo|null $currentInstanceGpuInfo
 * @property list<AutoScalingGroupRecommendationOption>|null $recommendationOptions
 * @property \Aws\Api\DateTimeResult|null $lastRefreshTimestamp
 * @property 'VeryLow'|'Low'|'Medium'|'High'|null $currentPerformanceRisk
 * @property EffectiveRecommendationPreferences|null $effectiveRecommendationPreferences
 * @property list<'AmazonEmr'|'ApacheCassandra'|'ApacheHadoop'|'Memcached'|'Nginx'|'PostgreSql'|'Redis'|'Kafka'|'SQLServer'>|null $inferredWorkloadTypes
 */
class AutoScalingGroupRecommendation extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     autoScalingGroupArn?: string|null,
     *     autoScalingGroupName?: string|null,
     *     finding?: 'Underprovisioned'|'Overprovisioned'|'Optimized'|'NotOptimized'|null,
     *     utilizationMetrics?: list<UtilizationMetric>|null,
     *     lookBackPeriodInDays?: double|null,
     *     currentConfiguration?: AutoScalingGroupConfiguration|null,
     *     currentInstanceGpuInfo?: GpuInfo|null,
     *     recommendationOptions?: list<AutoScalingGroupRecommendationOption>|null,
     *     lastRefreshTimestamp?: \Aws\Api\DateTimeResult|null,
     *     currentPerformanceRisk?: 'VeryLow'|'Low'|'Medium'|'High'|null,
     *     effectiveRecommendationPreferences?: EffectiveRecommendationPreferences|null,
     *     inferredWorkloadTypes?: list<'AmazonEmr'|'ApacheCassandra'|'ApacheHadoop'|'Memcached'|'Nginx'|'PostgreSql'|'Redis'|'Kafka'|'SQLServer'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
