<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceArn
 * @property string $accountId
 * @property string $instanceName
 * @property string $currentInstanceType
 * @property 'Underprovisioned'|'Overprovisioned'|'Optimized'|'NotOptimized' $finding
 * @property list<'CPUOverprovisioned'|'CPUUnderprovisioned'|'MemoryOverprovisioned'|'MemoryUnderprovisioned'|'EBSThroughputOverprovisioned'|'EBSThroughputUnderprovisioned'|'EBSIOPSOverprovisioned'|'EBSIOPSUnderprovisioned'|'NetworkBandwidthOverprovisioned'|'NetworkBandwidthUnderprovisioned'|'NetworkPPSOverprovisioned'|'NetworkPPSUnderprovisioned'|'DiskIOPSOverprovisioned'|'DiskIOPSUnderprovisioned'|'DiskThroughputOverprovisioned'|'DiskThroughputUnderprovisioned'|'GPUUnderprovisioned'|'GPUOverprovisioned'|'GPUMemoryUnderprovisioned'|'GPUMemoryOverprovisioned'> $findingReasonCodes
 * @property list<UtilizationMetric> $utilizationMetrics
 * @property double $lookBackPeriodInDays
 * @property list<InstanceRecommendationOption> $recommendationOptions
 * @property list<RecommendationSource> $recommendationSources
 * @property \Aws\Api\DateTimeResult $lastRefreshTimestamp
 * @property 'VeryLow'|'Low'|'Medium'|'High' $currentPerformanceRisk
 * @property EffectiveRecommendationPreferences $effectiveRecommendationPreferences
 * @property list<'AmazonEmr'|'ApacheCassandra'|'ApacheHadoop'|'Memcached'|'Nginx'|'PostgreSql'|'Redis'|'Kafka'|'SQLServer'> $inferredWorkloadTypes
 * @property 'pending'|'running'|'shutting-down'|'terminated'|'stopping'|'stopped' $instanceState
 * @property list<Tag> $tags
 * @property ExternalMetricStatus $externalMetricStatus
 * @property GpuInfo $currentInstanceGpuInfo
 * @property 'True'|'False' $idle
 */
class InstanceRecommendation extends Shape
{
    /**
     * @param array{
     *     instanceArn?: string,
     *     accountId?: string,
     *     instanceName?: string,
     *     currentInstanceType?: string,
     *     finding?: 'Underprovisioned'|'Overprovisioned'|'Optimized'|'NotOptimized',
     *     findingReasonCodes?: list<'CPUOverprovisioned'|'CPUUnderprovisioned'|'MemoryOverprovisioned'|'MemoryUnderprovisioned'|'EBSThroughputOverprovisioned'|'EBSThroughputUnderprovisioned'|'EBSIOPSOverprovisioned'|'EBSIOPSUnderprovisioned'|'NetworkBandwidthOverprovisioned'|'NetworkBandwidthUnderprovisioned'|'NetworkPPSOverprovisioned'|'NetworkPPSUnderprovisioned'|'DiskIOPSOverprovisioned'|'DiskIOPSUnderprovisioned'|'DiskThroughputOverprovisioned'|'DiskThroughputUnderprovisioned'|'GPUUnderprovisioned'|'GPUOverprovisioned'|'GPUMemoryUnderprovisioned'|'GPUMemoryOverprovisioned'>,
     *     utilizationMetrics?: list<UtilizationMetric>,
     *     lookBackPeriodInDays?: double,
     *     recommendationOptions?: list<InstanceRecommendationOption>,
     *     recommendationSources?: list<RecommendationSource>,
     *     lastRefreshTimestamp?: \Aws\Api\DateTimeResult,
     *     currentPerformanceRisk?: 'VeryLow'|'Low'|'Medium'|'High',
     *     effectiveRecommendationPreferences?: EffectiveRecommendationPreferences,
     *     inferredWorkloadTypes?: list<'AmazonEmr'|'ApacheCassandra'|'ApacheHadoop'|'Memcached'|'Nginx'|'PostgreSql'|'Redis'|'Kafka'|'SQLServer'>,
     *     instanceState?: 'pending'|'running'|'shutting-down'|'terminated'|'stopping'|'stopped',
     *     tags?: list<Tag>,
     *     externalMetricStatus?: ExternalMetricStatus,
     *     currentInstanceGpuInfo?: GpuInfo,
     *     idle?: 'True'|'False'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
