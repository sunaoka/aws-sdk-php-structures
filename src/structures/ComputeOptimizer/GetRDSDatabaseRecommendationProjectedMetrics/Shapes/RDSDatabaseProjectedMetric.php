<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendationProjectedMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CPU'|'Memory'|'EBSVolumeStorageSpaceUtilization'|'NetworkReceiveThroughput'|'NetworkTransmitThroughput'|'EBSVolumeReadIOPS'|'EBSVolumeWriteIOPS'|'EBSVolumeReadThroughput'|'EBSVolumeWriteThroughput'|'DatabaseConnections'|'StorageNetworkReceiveThroughput'|'StorageNetworkTransmitThroughput'|'AuroraMemoryHealthState'|'AuroraMemoryNumDeclinedSql'|'AuroraMemoryNumKillConnTotal'|'AuroraMemoryNumKillQueryTotal'|'ReadIOPSEphemeralStorage'|'WriteIOPSEphemeralStorage'|'VolumeReadIOPs'|'VolumeBytesUsed'|'VolumeWriteIOPs'|null $name
 * @property list<\Aws\Api\DateTimeResult>|null $timestamps
 * @property list<double>|null $values
 */
class RDSDatabaseProjectedMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'CPU'|'Memory'|'EBSVolumeStorageSpaceUtilization'|'NetworkReceiveThroughput'|'NetworkTransmitThroughput'|'EBSVolumeReadIOPS'|'EBSVolumeWriteIOPS'|'EBSVolumeReadThroughput'|'EBSVolumeWriteThroughput'|'DatabaseConnections'|'StorageNetworkReceiveThroughput'|'StorageNetworkTransmitThroughput'|'AuroraMemoryHealthState'|'AuroraMemoryNumDeclinedSql'|'AuroraMemoryNumKillConnTotal'|'AuroraMemoryNumKillQueryTotal'|'ReadIOPSEphemeralStorage'|'WriteIOPSEphemeralStorage'|'VolumeReadIOPs'|'VolumeBytesUsed'|'VolumeWriteIOPs'|null,
     *     timestamps?: list<\Aws\Api\DateTimeResult>|null,
     *     values?: list<double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
