<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $fluxLogEnabled
 * @property 'debug'|'info'|'error' $logLevel
 * @property bool $noTasks
 * @property int<0, 256> $queryConcurrency
 * @property int<0, 256> $queryQueueSize
 * @property 'log'|'jaeger' $tracingType
 * @property bool $metricsDisabled
 * @property Duration $httpIdleTimeout
 * @property Duration $httpReadHeaderTimeout
 * @property Duration $httpReadTimeout
 * @property Duration $httpWriteTimeout
 * @property int<0, 1000000000000> $influxqlMaxSelectBuckets
 * @property int<0, 1000000000000> $influxqlMaxSelectPoint
 * @property int<0, 1000000000000> $influxqlMaxSelectSeries
 * @property bool $pprofDisabled
 * @property int<0, 1000000000000> $queryInitialMemoryBytes
 * @property int<0, 1000000000000> $queryMaxMemoryBytes
 * @property int<0, 1000000000000> $queryMemoryBytes
 * @property int<1, 2880> $sessionLength
 * @property bool $sessionRenewDisabled
 * @property int<0, 1000000000000> $storageCacheMaxMemorySize
 * @property int<0, 1000000000000> $storageCacheSnapshotMemorySize
 * @property Duration $storageCacheSnapshotWriteColdDuration
 * @property Duration $storageCompactFullWriteColdDuration
 * @property int<0, 1000000000000> $storageCompactThroughputBurst
 * @property int<0, 64> $storageMaxConcurrentCompactions
 * @property int<0, 1000000000000> $storageMaxIndexLogFileSize
 * @property bool $storageNoValidateFieldSize
 * @property Duration $storageRetentionCheckInterval
 * @property int<0, 64> $storageSeriesFileMaxConcurrentSnapshotCompactions
 * @property int<0, 1000000000000> $storageSeriesIdSetCacheSize
 * @property int<0, 256> $storageWalMaxConcurrentWrites
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
     *     queryConcurrency?: int<0, 256>,
     *     queryQueueSize?: int<0, 256>,
     *     tracingType?: 'log'|'jaeger',
     *     metricsDisabled?: bool,
     *     httpIdleTimeout?: Duration,
     *     httpReadHeaderTimeout?: Duration,
     *     httpReadTimeout?: Duration,
     *     httpWriteTimeout?: Duration,
     *     influxqlMaxSelectBuckets?: int<0, 1000000000000>,
     *     influxqlMaxSelectPoint?: int<0, 1000000000000>,
     *     influxqlMaxSelectSeries?: int<0, 1000000000000>,
     *     pprofDisabled?: bool,
     *     queryInitialMemoryBytes?: int<0, 1000000000000>,
     *     queryMaxMemoryBytes?: int<0, 1000000000000>,
     *     queryMemoryBytes?: int<0, 1000000000000>,
     *     sessionLength?: int<1, 2880>,
     *     sessionRenewDisabled?: bool,
     *     storageCacheMaxMemorySize?: int<0, 1000000000000>,
     *     storageCacheSnapshotMemorySize?: int<0, 1000000000000>,
     *     storageCacheSnapshotWriteColdDuration?: Duration,
     *     storageCompactFullWriteColdDuration?: Duration,
     *     storageCompactThroughputBurst?: int<0, 1000000000000>,
     *     storageMaxConcurrentCompactions?: int<0, 64>,
     *     storageMaxIndexLogFileSize?: int<0, 1000000000000>,
     *     storageNoValidateFieldSize?: bool,
     *     storageRetentionCheckInterval?: Duration,
     *     storageSeriesFileMaxConcurrentSnapshotCompactions?: int<0, 64>,
     *     storageSeriesIdSetCacheSize?: int<0, 1000000000000>,
     *     storageWalMaxConcurrentWrites?: int<0, 256>,
     *     storageWalMaxWriteDelay?: Duration,
     *     uiDisabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
