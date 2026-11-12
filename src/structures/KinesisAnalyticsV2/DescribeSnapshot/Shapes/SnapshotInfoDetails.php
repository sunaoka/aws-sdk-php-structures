<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotName
 * @property string $SnapshotArn
 * @property string|null $SnapshotDescription
 * @property 'CREATING'|'READY'|'DELETING'|'FAILED' $SnapshotStatus
 * @property \Aws\Api\DateTimeResult $SnapshotCreationTimestamp
 * @property 'SQL-1_0'|'FLINK-1_6'|'FLINK-1_8'|'ZEPPELIN-FLINK-1_0'|'FLINK-1_11'|'FLINK-1_13'|'ZEPPELIN-FLINK-2_0'|'FLINK-1_15'|'ZEPPELIN-FLINK-3_0'|'FLINK-1_18'|'FLINK-1_19'|'FLINK-1_20'|'FLINK-2_2'|'FLINK-2_3'|null $RuntimeEnvironment
 * @property int|null $SnapshotSizeInBytes
 * @property SnapshotEncryptionConfiguration|null $SnapshotEncryptionConfigurationDescription
 * @property 'USER'|'SYSTEM' $SnapshotInitiator
 * @property 'CreateSnapshot'|'ImportSnapshot'|'SystemCreateSnapshot' $SnapshotInitiatorOperation
 * @property SnapshotSourceDescription $SnapshotSourceDescription
 * @property 'CANONICAL' $SnapshotFormat
 */
class SnapshotInfoDetails extends Shape
{
    /**
     * @param array{
     *     SnapshotName: string,
     *     SnapshotArn: string,
     *     SnapshotDescription?: string|null,
     *     SnapshotStatus: 'CREATING'|'READY'|'DELETING'|'FAILED',
     *     SnapshotCreationTimestamp: \Aws\Api\DateTimeResult,
     *     RuntimeEnvironment?: 'SQL-1_0'|'FLINK-1_6'|'FLINK-1_8'|'ZEPPELIN-FLINK-1_0'|'FLINK-1_11'|'FLINK-1_13'|'ZEPPELIN-FLINK-2_0'|'FLINK-1_15'|'ZEPPELIN-FLINK-3_0'|'FLINK-1_18'|'FLINK-1_19'|'FLINK-1_20'|'FLINK-2_2'|'FLINK-2_3'|null,
     *     SnapshotSizeInBytes?: int|null,
     *     SnapshotEncryptionConfigurationDescription?: SnapshotEncryptionConfiguration|null,
     *     SnapshotInitiator: 'USER'|'SYSTEM',
     *     SnapshotInitiatorOperation: 'CreateSnapshot'|'ImportSnapshot'|'SystemCreateSnapshot',
     *     SnapshotSourceDescription: SnapshotSourceDescription,
     *     SnapshotFormat: 'CANONICAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
