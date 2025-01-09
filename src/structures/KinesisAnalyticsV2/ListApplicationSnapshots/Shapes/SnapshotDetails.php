<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListApplicationSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotName
 * @property 'CREATING'|'READY'|'DELETING'|'FAILED' $SnapshotStatus
 * @property int $ApplicationVersionId
 * @property \Aws\Api\DateTimeResult $SnapshotCreationTimestamp
 * @property 'SQL-1_0'|'FLINK-1_6'|'FLINK-1_8'|'ZEPPELIN-FLINK-1_0'|'FLINK-1_11'|'FLINK-1_13'|'ZEPPELIN-FLINK-2_0'|'FLINK-1_15'|'ZEPPELIN-FLINK-3_0'|'FLINK-1_18'|'FLINK-1_19'|'FLINK-1_20' $RuntimeEnvironment
 */
class SnapshotDetails extends Shape
{
    /**
     * @param array{
     *     SnapshotName: string,
     *     SnapshotStatus: 'CREATING'|'READY'|'DELETING'|'FAILED',
     *     ApplicationVersionId: int,
     *     SnapshotCreationTimestamp?: \Aws\Api\DateTimeResult,
     *     RuntimeEnvironment?: 'SQL-1_0'|'FLINK-1_6'|'FLINK-1_8'|'ZEPPELIN-FLINK-1_0'|'FLINK-1_11'|'FLINK-1_13'|'ZEPPELIN-FLINK-2_0'|'FLINK-1_15'|'ZEPPELIN-FLINK-3_0'|'FLINK-1_18'|'FLINK-1_19'|'FLINK-1_20'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
