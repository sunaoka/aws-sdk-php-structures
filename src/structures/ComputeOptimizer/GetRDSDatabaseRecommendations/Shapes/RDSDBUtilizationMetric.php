<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CPU'|'Memory'|'EBSVolumeStorageSpaceUtilization'|'NetworkReceiveThroughput'|'NetworkTransmitThroughput'|'EBSVolumeReadIOPS'|'EBSVolumeWriteIOPS'|'EBSVolumeReadThroughput'|'EBSVolumeWriteThroughput'|'DatabaseConnections'|'StorageNetworkReceiveThroughput'|'StorageNetworkTransmitThroughput'|'AuroraMemoryHealthState'|'AuroraMemoryNumDeclinedSql'|'AuroraMemoryNumKillConnTotal'|'AuroraMemoryNumKillQueryTotal'|'ReadIOPSEphemeralStorage'|'WriteIOPSEphemeralStorage' $name
 * @property 'Maximum'|'Minimum'|'Average' $statistic
 * @property double $value
 */
class RDSDBUtilizationMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'CPU'|'Memory'|'EBSVolumeStorageSpaceUtilization'|'NetworkReceiveThroughput'|'NetworkTransmitThroughput'|'EBSVolumeReadIOPS'|'EBSVolumeWriteIOPS'|'EBSVolumeReadThroughput'|'EBSVolumeWriteThroughput'|'DatabaseConnections'|'StorageNetworkReceiveThroughput'|'StorageNetworkTransmitThroughput'|'AuroraMemoryHealthState'|'AuroraMemoryNumDeclinedSql'|'AuroraMemoryNumKillConnTotal'|'AuroraMemoryNumKillQueryTotal'|'ReadIOPSEphemeralStorage'|'WriteIOPSEphemeralStorage',
     *     statistic?: 'Maximum'|'Minimum'|'Average',
     *     value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
