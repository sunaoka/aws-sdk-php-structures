<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $autoScalingGroupArn
 * @property string $autoScalingGroupName
 * @property 'Underprovisioned'|'Overprovisioned'|'Optimized'|'NotOptimized' $finding
 * @property list<UtilizationMetric> $utilizationMetrics
 * @property double $lookBackPeriodInDays
 * @property AutoScalingGroupConfiguration $currentConfiguration
 * @property GpuInfo $currentInstanceGpuInfo
 * @property list<AutoScalingGroupRecommendationOption> $recommendationOptions
 * @property \Aws\Api\DateTimeResult $lastRefreshTimestamp
 * @property 'VeryLow'|'Low'|'Medium'|'High' $currentPerformanceRisk
 * @property EffectiveRecommendationPreferences $effectiveRecommendationPreferences
 * @property list<'AmazonEmr'|'ApacheCassandra'|'ApacheHadoop'|'Memcached'|'Nginx'|'PostgreSql'|'Redis'|'Kafka'|'SQLServer'> $inferredWorkloadTypes
 */
class AutoScalingGroupRecommendation extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     autoScalingGroupArn?: string,
     *     autoScalingGroupName?: string,
     *     finding?: 'Underprovisioned'|'Overprovisioned'|'Optimized'|'NotOptimized',
     *     utilizationMetrics?: list<UtilizationMetric>,
     *     lookBackPeriodInDays?: double,
     *     currentConfiguration?: AutoScalingGroupConfiguration,
     *     currentInstanceGpuInfo?: GpuInfo,
     *     recommendationOptions?: list<AutoScalingGroupRecommendationOption>,
     *     lastRefreshTimestamp?: \Aws\Api\DateTimeResult,
     *     currentPerformanceRisk?: 'VeryLow'|'Low'|'Medium'|'High',
     *     effectiveRecommendationPreferences?: EffectiveRecommendationPreferences,
     *     inferredWorkloadTypes?: list<'AmazonEmr'|'ApacheCassandra'|'ApacheHadoop'|'Memcached'|'Nginx'|'PostgreSql'|'Redis'|'Kafka'|'SQLServer'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
