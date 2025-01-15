<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CPU'|'Memory'|'EBSVolumeStorageSpaceUtilization'|'NetworkReceiveThroughput'|'NetworkTransmitThroughput'|'EBSVolumeReadIOPS'|'EBSVolumeWriteIOPS'|'EBSVolumeReadThroughput'|'EBSVolumeWriteThroughput'|'DatabaseConnections'|'StorageNetworkReceiveThroughput'|'StorageNetworkTransmitThroughput'|'AuroraMemoryHealthState'|'AuroraMemoryNumDeclinedSql'|'AuroraMemoryNumKillConnTotal'|'AuroraMemoryNumKillQueryTotal'|'ReadIOPSEphemeralStorage'|'WriteIOPSEphemeralStorage'|null $name
 * @property 'Maximum'|'Minimum'|'Average'|null $statistic
 * @property double|null $value
 */
class RDSDBUtilizationMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'CPU'|'Memory'|'EBSVolumeStorageSpaceUtilization'|'NetworkReceiveThroughput'|'NetworkTransmitThroughput'|'EBSVolumeReadIOPS'|'EBSVolumeWriteIOPS'|'EBSVolumeReadThroughput'|'EBSVolumeWriteThroughput'|'DatabaseConnections'|'StorageNetworkReceiveThroughput'|'StorageNetworkTransmitThroughput'|'AuroraMemoryHealthState'|'AuroraMemoryNumDeclinedSql'|'AuroraMemoryNumKillConnTotal'|'AuroraMemoryNumKillQueryTotal'|'ReadIOPSEphemeralStorage'|'WriteIOPSEphemeralStorage'|null,
     *     statistic?: 'Maximum'|'Minimum'|'Average'|null,
     *     value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
