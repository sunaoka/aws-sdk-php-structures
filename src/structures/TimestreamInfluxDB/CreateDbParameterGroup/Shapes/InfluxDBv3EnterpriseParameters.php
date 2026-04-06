<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 1024>|null $queryFileLimit
 * @property int<1, 10000>|null $queryLogSize
 * @property string|null $logFilter
 * @property 'full'|null $logFormat
 * @property int<1, 2048>|null $dataFusionNumThreads
 * @property 'multi-thread'|'multi-thread-alt'|null $dataFusionRuntimeType
 * @property bool|null $dataFusionRuntimeDisableLifoSlot
 * @property int<1, 128>|null $dataFusionRuntimeEventInterval
 * @property int<1, 128>|null $dataFusionRuntimeGlobalQueueInterval
 * @property int<1, 1024>|null $dataFusionRuntimeMaxBlockingThreads
 * @property int<1, 4096>|null $dataFusionRuntimeMaxIoEventsPerTick
 * @property Duration|null $dataFusionRuntimeThreadKeepAlive
 * @property int<-20, 19>|null $dataFusionRuntimeThreadPriority
 * @property int<1, 1000000>|null $dataFusionMaxParquetFanout
 * @property bool|null $dataFusionUseCachedParquetLoader
 * @property string|null $dataFusionConfig
 * @property int<1024, 16777216>|null $maxHttpRequestSize
 * @property PercentOrAbsoluteLong|null $forceSnapshotMemThreshold
 * @property int<1, 10000>|null $walSnapshotSize
 * @property int<1, 1000000>|null $walMaxWriteBufferSize
 * @property int<0, 10000>|null $snapshottedWalFilesToKeep
 * @property Duration|null $preemptiveCacheAge
 * @property float|null $parquetMemCachePrunePercentage
 * @property Duration|null $parquetMemCachePruneInterval
 * @property bool|null $disableParquetMemCache
 * @property Duration|null $parquetMemCacheQueryPathDuration
 * @property Duration|null $lastCacheEvictionInterval
 * @property Duration|null $distinctCacheEvictionInterval
 * @property Duration|null $gen1Duration
 * @property PercentOrAbsoluteLong|null $execMemPoolBytes
 * @property PercentOrAbsoluteLong|null $parquetMemCacheSize
 * @property bool|null $walReplayFailOnError
 * @property int<1, 100>|null $walReplayConcurrencyLimit
 * @property int<1, 1000>|null $tableIndexCacheMaxEntries
 * @property int<1, 100>|null $tableIndexCacheConcurrencyLimit
 * @property Duration|null $gen1LookbackDuration
 * @property Duration|null $retentionCheckInterval
 * @property Duration|null $deleteGracePeriod
 * @property Duration|null $hardDeleteDefaultDuration
 * @property int<1, 4> $ingestQueryInstances
 * @property int<0, 10> $queryOnlyInstances
 * @property bool $dedicatedCompactor
 * @property int<1, 100000000>|null $compactionRowLimit
 * @property int<1, 10000>|null $compactionMaxNumFilesPerPlan
 * @property Duration|null $compactionGen2Duration
 * @property string|null $compactionMultipliers
 * @property Duration|null $compactionCleanupWait
 * @property Duration|null $compactionCheckInterval
 * @property bool|null $lastValueCacheDisableFromHistory
 * @property bool|null $distinctValueCacheDisableFromHistory
 * @property Duration|null $replicationInterval
 * @property Duration|null $catalogSyncInterval
 */
class InfluxDBv3EnterpriseParameters extends Shape
{
    /**
     * @param array{
     *     queryFileLimit?: int<0, 1024>|null,
     *     queryLogSize?: int<1, 10000>|null,
     *     logFilter?: string|null,
     *     logFormat?: 'full'|null,
     *     dataFusionNumThreads?: int<1, 2048>|null,
     *     dataFusionRuntimeType?: 'multi-thread'|'multi-thread-alt'|null,
     *     dataFusionRuntimeDisableLifoSlot?: bool|null,
     *     dataFusionRuntimeEventInterval?: int<1, 128>|null,
     *     dataFusionRuntimeGlobalQueueInterval?: int<1, 128>|null,
     *     dataFusionRuntimeMaxBlockingThreads?: int<1, 1024>|null,
     *     dataFusionRuntimeMaxIoEventsPerTick?: int<1, 4096>|null,
     *     dataFusionRuntimeThreadKeepAlive?: Duration|null,
     *     dataFusionRuntimeThreadPriority?: int<-20, 19>|null,
     *     dataFusionMaxParquetFanout?: int<1, 1000000>|null,
     *     dataFusionUseCachedParquetLoader?: bool|null,
     *     dataFusionConfig?: string|null,
     *     maxHttpRequestSize?: int<1024, 16777216>|null,
     *     forceSnapshotMemThreshold?: PercentOrAbsoluteLong|null,
     *     walSnapshotSize?: int<1, 10000>|null,
     *     walMaxWriteBufferSize?: int<1, 1000000>|null,
     *     snapshottedWalFilesToKeep?: int<0, 10000>|null,
     *     preemptiveCacheAge?: Duration|null,
     *     parquetMemCachePrunePercentage?: float|null,
     *     parquetMemCachePruneInterval?: Duration|null,
     *     disableParquetMemCache?: bool|null,
     *     parquetMemCacheQueryPathDuration?: Duration|null,
     *     lastCacheEvictionInterval?: Duration|null,
     *     distinctCacheEvictionInterval?: Duration|null,
     *     gen1Duration?: Duration|null,
     *     execMemPoolBytes?: PercentOrAbsoluteLong|null,
     *     parquetMemCacheSize?: PercentOrAbsoluteLong|null,
     *     walReplayFailOnError?: bool|null,
     *     walReplayConcurrencyLimit?: int<1, 100>|null,
     *     tableIndexCacheMaxEntries?: int<1, 1000>|null,
     *     tableIndexCacheConcurrencyLimit?: int<1, 100>|null,
     *     gen1LookbackDuration?: Duration|null,
     *     retentionCheckInterval?: Duration|null,
     *     deleteGracePeriod?: Duration|null,
     *     hardDeleteDefaultDuration?: Duration|null,
     *     ingestQueryInstances: int<1, 4>,
     *     queryOnlyInstances: int<0, 10>,
     *     dedicatedCompactor: bool,
     *     compactionRowLimit?: int<1, 100000000>|null,
     *     compactionMaxNumFilesPerPlan?: int<1, 10000>|null,
     *     compactionGen2Duration?: Duration|null,
     *     compactionMultipliers?: string|null,
     *     compactionCleanupWait?: Duration|null,
     *     compactionCheckInterval?: Duration|null,
     *     lastValueCacheDisableFromHistory?: bool|null,
     *     distinctValueCacheDisableFromHistory?: bool|null,
     *     replicationInterval?: Duration|null,
     *     catalogSyncInterval?: Duration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
