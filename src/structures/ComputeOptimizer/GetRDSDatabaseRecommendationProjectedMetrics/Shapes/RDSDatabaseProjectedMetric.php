<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendationProjectedMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CPU'|'Memory'|'EBSVolumeStorageSpaceUtilization'|'NetworkReceiveThroughput'|'NetworkTransmitThroughput'|'EBSVolumeReadIOPS'|'EBSVolumeWriteIOPS'|'EBSVolumeReadThroughput'|'EBSVolumeWriteThroughput'|'DatabaseConnections'|'StorageNetworkReceiveThroughput'|'StorageNetworkTransmitThroughput'|'AuroraMemoryHealthState'|'AuroraMemoryNumDeclinedSql'|'AuroraMemoryNumKillConnTotal'|'AuroraMemoryNumKillQueryTotal'|'ReadIOPSEphemeralStorage'|'WriteIOPSEphemeralStorage' $name
 * @property list<\Aws\Api\DateTimeResult> $timestamps
 * @property list<double> $values
 */
class RDSDatabaseProjectedMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'CPU'|'Memory'|'EBSVolumeStorageSpaceUtilization'|'NetworkReceiveThroughput'|'NetworkTransmitThroughput'|'EBSVolumeReadIOPS'|'EBSVolumeWriteIOPS'|'EBSVolumeReadThroughput'|'EBSVolumeWriteThroughput'|'DatabaseConnections'|'StorageNetworkReceiveThroughput'|'StorageNetworkTransmitThroughput'|'AuroraMemoryHealthState'|'AuroraMemoryNumDeclinedSql'|'AuroraMemoryNumKillConnTotal'|'AuroraMemoryNumKillQueryTotal'|'ReadIOPSEphemeralStorage'|'WriteIOPSEphemeralStorage',
     *     timestamps?: list<\Aws\Api\DateTimeResult>,
     *     values?: list<double>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
