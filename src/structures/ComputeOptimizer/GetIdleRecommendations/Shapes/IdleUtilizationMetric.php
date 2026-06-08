<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetIdleRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CPU'|'Memory'|'NetworkOutBytesPerSecond'|'NetworkInBytesPerSecond'|'DatabaseConnections'|'EBSVolumeReadIOPS'|'EBSVolumeWriteIOPS'|'VolumeReadOpsPerSecond'|'VolumeWriteOpsPerSecond'|'ActiveConnectionCount'|'PacketsInFromSource'|'PacketsInFromDestination'|'ConsumedReadCapacityUnits'|'ConsumedWriteCapacityUnits'|'ConsumedChangeDataCaptureUnits'|'NewConnections'|'EngineCPUUtilization'|'CacheHits'|'CacheMisses'|'KeyspaceHits'|'KeyspaceMisses'|'IsIdle'|'UserConnected'|'Invocations'|'GetTypeCmds'|'SetTypeCmds'|'ElastiCacheProcessingUnits'|'CurrConnections'|null $name
 * @property 'Maximum'|'Average'|null $statistic
 * @property double|null $value
 * @property list<IdleDimension>|null $dimensions
 */
class IdleUtilizationMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'CPU'|'Memory'|'NetworkOutBytesPerSecond'|'NetworkInBytesPerSecond'|'DatabaseConnections'|'EBSVolumeReadIOPS'|'EBSVolumeWriteIOPS'|'VolumeReadOpsPerSecond'|'VolumeWriteOpsPerSecond'|'ActiveConnectionCount'|'PacketsInFromSource'|'PacketsInFromDestination'|'ConsumedReadCapacityUnits'|'ConsumedWriteCapacityUnits'|'ConsumedChangeDataCaptureUnits'|'NewConnections'|'EngineCPUUtilization'|'CacheHits'|'CacheMisses'|'KeyspaceHits'|'KeyspaceMisses'|'IsIdle'|'UserConnected'|'Invocations'|'GetTypeCmds'|'SetTypeCmds'|'ElastiCacheProcessingUnits'|'CurrConnections'|null,
     *     statistic?: 'Maximum'|'Average'|null,
     *     value?: double|null,
     *     dimensions?: list<IdleDimension>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
