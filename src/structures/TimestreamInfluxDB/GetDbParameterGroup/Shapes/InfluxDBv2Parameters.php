<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $fluxLogEnabled
 * @property 'debug'|'info'|'error' $logLevel
 * @property bool $noTasks
 * @property int $queryConcurrency
 * @property int $queryQueueSize
 * @property 'log'|'jaeger' $tracingType
 * @property bool $metricsDisabled
 * @property Duration $httpIdleTimeout
 * @property Duration $httpReadHeaderTimeout
 * @property Duration $httpReadTimeout
 * @property Duration $httpWriteTimeout
 * @property int $influxqlMaxSelectBuckets
 * @property int $influxqlMaxSelectPoint
 * @property int $influxqlMaxSelectSeries
 * @property bool $pprofDisabled
 * @property int $queryInitialMemoryBytes
 * @property int $queryMaxMemoryBytes
 * @property int $queryMemoryBytes
 * @property int $sessionLength
 * @property bool $sessionRenewDisabled
 * @property int $storageCacheMaxMemorySize
 * @property int $storageCacheSnapshotMemorySize
 * @property Duration $storageCacheSnapshotWriteColdDuration
 * @property Duration $storageCompactFullWriteColdDuration
 * @property int $storageCompactThroughputBurst
 * @property int $storageMaxConcurrentCompactions
 * @property int $storageMaxIndexLogFileSize
 * @property bool $storageNoValidateFieldSize
 * @property Duration $storageRetentionCheckInterval
 * @property int $storageSeriesFileMaxConcurrentSnapshotCompactions
 * @property int $storageSeriesIdSetCacheSize
 * @property int $storageWalMaxConcurrentWrites
 * @property Duration $storageWalMaxWriteDelay
 * @property bool $uiDisabled
 */
class InfluxDBv2Parameters extends Shape
{
    /**
     * @param array{
     *     fluxLogEnabled?: bool,
     *     logLevel?: 'debug'|'info'|'error',
     *     noTasks?: bool,
     *     queryConcurrency?: int,
     *     queryQueueSize?: int,
     *     tracingType?: 'log'|'jaeger',
     *     metricsDisabled?: bool,
     *     httpIdleTimeout?: Duration,
     *     httpReadHeaderTimeout?: Duration,
     *     httpReadTimeout?: Duration,
     *     httpWriteTimeout?: Duration,
     *     influxqlMaxSelectBuckets?: int,
     *     influxqlMaxSelectPoint?: int,
     *     influxqlMaxSelectSeries?: int,
     *     pprofDisabled?: bool,
     *     queryInitialMemoryBytes?: int,
     *     queryMaxMemoryBytes?: int,
     *     queryMemoryBytes?: int,
     *     sessionLength?: int,
     *     sessionRenewDisabled?: bool,
     *     storageCacheMaxMemorySize?: int,
     *     storageCacheSnapshotMemorySize?: int,
     *     storageCacheSnapshotWriteColdDuration?: Duration,
     *     storageCompactFullWriteColdDuration?: Duration,
     *     storageCompactThroughputBurst?: int,
     *     storageMaxConcurrentCompactions?: int,
     *     storageMaxIndexLogFileSize?: int,
     *     storageNoValidateFieldSize?: bool,
     *     storageRetentionCheckInterval?: Duration,
     *     storageSeriesFileMaxConcurrentSnapshotCompactions?: int,
     *     storageSeriesIdSetCacheSize?: int,
     *     storageWalMaxConcurrentWrites?: int,
     *     storageWalMaxWriteDelay?: Duration,
     *     uiDisabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
