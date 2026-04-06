<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $fluxLogEnabled
 * @property 'debug'|'info'|'error'|null $logLevel
 * @property bool|null $noTasks
 * @property int<0, 256>|null $queryConcurrency
 * @property int<0, 256>|null $queryQueueSize
 * @property 'log'|'jaeger'|'disabled'|null $tracingType
 * @property bool|null $metricsDisabled
 * @property Duration|null $httpIdleTimeout
 * @property Duration|null $httpReadHeaderTimeout
 * @property Duration|null $httpReadTimeout
 * @property Duration|null $httpWriteTimeout
 * @property int<0, 1000000000000>|null $influxqlMaxSelectBuckets
 * @property int<0, 1000000000000>|null $influxqlMaxSelectPoint
 * @property int<0, 1000000000000>|null $influxqlMaxSelectSeries
 * @property bool|null $pprofDisabled
 * @property int<0, 1000000000000>|null $queryInitialMemoryBytes
 * @property int<0, 1000000000000>|null $queryMaxMemoryBytes
 * @property int<0, 1000000000000>|null $queryMemoryBytes
 * @property int<1, 2880>|null $sessionLength
 * @property bool|null $sessionRenewDisabled
 * @property int<0, 1000000000000>|null $storageCacheMaxMemorySize
 * @property int<0, 1000000000000>|null $storageCacheSnapshotMemorySize
 * @property Duration|null $storageCacheSnapshotWriteColdDuration
 * @property Duration|null $storageCompactFullWriteColdDuration
 * @property int<0, 1000000000000>|null $storageCompactThroughputBurst
 * @property int<0, 64>|null $storageMaxConcurrentCompactions
 * @property int<0, 1000000000000>|null $storageMaxIndexLogFileSize
 * @property bool|null $storageNoValidateFieldSize
 * @property Duration|null $storageRetentionCheckInterval
 * @property int<0, 64>|null $storageSeriesFileMaxConcurrentSnapshotCompactions
 * @property int<0, 1000000000000>|null $storageSeriesIdSetCacheSize
 * @property int<0, 256>|null $storageWalMaxConcurrentWrites
 * @property Duration|null $storageWalMaxWriteDelay
 * @property bool|null $uiDisabled
 */
class InfluxDBv2Parameters extends Shape
{
    /**
     * @param array{
     *     fluxLogEnabled?: bool|null,
     *     logLevel?: 'debug'|'info'|'error'|null,
     *     noTasks?: bool|null,
     *     queryConcurrency?: int<0, 256>|null,
     *     queryQueueSize?: int<0, 256>|null,
     *     tracingType?: 'log'|'jaeger'|'disabled'|null,
     *     metricsDisabled?: bool|null,
     *     httpIdleTimeout?: Duration|null,
     *     httpReadHeaderTimeout?: Duration|null,
     *     httpReadTimeout?: Duration|null,
     *     httpWriteTimeout?: Duration|null,
     *     influxqlMaxSelectBuckets?: int<0, 1000000000000>|null,
     *     influxqlMaxSelectPoint?: int<0, 1000000000000>|null,
     *     influxqlMaxSelectSeries?: int<0, 1000000000000>|null,
     *     pprofDisabled?: bool|null,
     *     queryInitialMemoryBytes?: int<0, 1000000000000>|null,
     *     queryMaxMemoryBytes?: int<0, 1000000000000>|null,
     *     queryMemoryBytes?: int<0, 1000000000000>|null,
     *     sessionLength?: int<1, 2880>|null,
     *     sessionRenewDisabled?: bool|null,
     *     storageCacheMaxMemorySize?: int<0, 1000000000000>|null,
     *     storageCacheSnapshotMemorySize?: int<0, 1000000000000>|null,
     *     storageCacheSnapshotWriteColdDuration?: Duration|null,
     *     storageCompactFullWriteColdDuration?: Duration|null,
     *     storageCompactThroughputBurst?: int<0, 1000000000000>|null,
     *     storageMaxConcurrentCompactions?: int<0, 64>|null,
     *     storageMaxIndexLogFileSize?: int<0, 1000000000000>|null,
     *     storageNoValidateFieldSize?: bool|null,
     *     storageRetentionCheckInterval?: Duration|null,
     *     storageSeriesFileMaxConcurrentSnapshotCompactions?: int<0, 64>|null,
     *     storageSeriesIdSetCacheSize?: int<0, 1000000000000>|null,
     *     storageWalMaxConcurrentWrites?: int<0, 256>|null,
     *     storageWalMaxWriteDelay?: Duration|null,
     *     uiDisabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
