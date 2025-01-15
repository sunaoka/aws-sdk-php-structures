<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $instanceArn
 * @property string|null $accountId
 * @property string|null $instanceName
 * @property string|null $currentInstanceType
 * @property 'Underprovisioned'|'Overprovisioned'|'Optimized'|'NotOptimized'|null $finding
 * @property list<'CPUOverprovisioned'|'CPUUnderprovisioned'|'MemoryOverprovisioned'|'MemoryUnderprovisioned'|'EBSThroughputOverprovisioned'|'EBSThroughputUnderprovisioned'|'EBSIOPSOverprovisioned'|'EBSIOPSUnderprovisioned'|'NetworkBandwidthOverprovisioned'|'NetworkBandwidthUnderprovisioned'|'NetworkPPSOverprovisioned'|'NetworkPPSUnderprovisioned'|'DiskIOPSOverprovisioned'|'DiskIOPSUnderprovisioned'|'DiskThroughputOverprovisioned'|'DiskThroughputUnderprovisioned'|'GPUUnderprovisioned'|'GPUOverprovisioned'|'GPUMemoryUnderprovisioned'|'GPUMemoryOverprovisioned'>|null $findingReasonCodes
 * @property list<UtilizationMetric>|null $utilizationMetrics
 * @property double|null $lookBackPeriodInDays
 * @property list<InstanceRecommendationOption>|null $recommendationOptions
 * @property list<RecommendationSource>|null $recommendationSources
 * @property \Aws\Api\DateTimeResult|null $lastRefreshTimestamp
 * @property 'VeryLow'|'Low'|'Medium'|'High'|null $currentPerformanceRisk
 * @property EffectiveRecommendationPreferences|null $effectiveRecommendationPreferences
 * @property list<'AmazonEmr'|'ApacheCassandra'|'ApacheHadoop'|'Memcached'|'Nginx'|'PostgreSql'|'Redis'|'Kafka'|'SQLServer'>|null $inferredWorkloadTypes
 * @property 'pending'|'running'|'shutting-down'|'terminated'|'stopping'|'stopped'|null $instanceState
 * @property list<Tag>|null $tags
 * @property ExternalMetricStatus|null $externalMetricStatus
 * @property GpuInfo|null $currentInstanceGpuInfo
 * @property 'True'|'False'|null $idle
 */
class InstanceRecommendation extends Shape
{
    /**
     * @param array{
     *     instanceArn?: string|null,
     *     accountId?: string|null,
     *     instanceName?: string|null,
     *     currentInstanceType?: string|null,
     *     finding?: 'Underprovisioned'|'Overprovisioned'|'Optimized'|'NotOptimized'|null,
     *     findingReasonCodes?: list<'CPUOverprovisioned'|'CPUUnderprovisioned'|'MemoryOverprovisioned'|'MemoryUnderprovisioned'|'EBSThroughputOverprovisioned'|'EBSThroughputUnderprovisioned'|'EBSIOPSOverprovisioned'|'EBSIOPSUnderprovisioned'|'NetworkBandwidthOverprovisioned'|'NetworkBandwidthUnderprovisioned'|'NetworkPPSOverprovisioned'|'NetworkPPSUnderprovisioned'|'DiskIOPSOverprovisioned'|'DiskIOPSUnderprovisioned'|'DiskThroughputOverprovisioned'|'DiskThroughputUnderprovisioned'|'GPUUnderprovisioned'|'GPUOverprovisioned'|'GPUMemoryUnderprovisioned'|'GPUMemoryOverprovisioned'>|null,
     *     utilizationMetrics?: list<UtilizationMetric>|null,
     *     lookBackPeriodInDays?: double|null,
     *     recommendationOptions?: list<InstanceRecommendationOption>|null,
     *     recommendationSources?: list<RecommendationSource>|null,
     *     lastRefreshTimestamp?: \Aws\Api\DateTimeResult|null,
     *     currentPerformanceRisk?: 'VeryLow'|'Low'|'Medium'|'High'|null,
     *     effectiveRecommendationPreferences?: EffectiveRecommendationPreferences|null,
     *     inferredWorkloadTypes?: list<'AmazonEmr'|'ApacheCassandra'|'ApacheHadoop'|'Memcached'|'Nginx'|'PostgreSql'|'Redis'|'Kafka'|'SQLServer'>|null,
     *     instanceState?: 'pending'|'running'|'shutting-down'|'terminated'|'stopping'|'stopped'|null,
     *     tags?: list<Tag>|null,
     *     externalMetricStatus?: ExternalMetricStatus|null,
     *     currentInstanceGpuInfo?: GpuInfo|null,
     *     idle?: 'True'|'False'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
