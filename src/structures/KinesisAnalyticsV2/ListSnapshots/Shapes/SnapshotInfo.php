<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotName
 * @property string $SnapshotArn
 * @property 'CREATING'|'READY'|'DELETING'|'FAILED' $SnapshotStatus
 * @property \Aws\Api\DateTimeResult $SnapshotCreationTimestamp
 * @property 'USER'|'SYSTEM' $SnapshotInitiator
 * @property 'CreateSnapshot'|'ImportSnapshot'|'SystemCreateSnapshot' $SnapshotInitiatorOperation
 * @property string|null $SourceApplicationName
 * @property 'CANONICAL' $SnapshotFormat
 */
class SnapshotInfo extends Shape
{
    /**
     * @param array{
     *     SnapshotName: string,
     *     SnapshotArn: string,
     *     SnapshotStatus: 'CREATING'|'READY'|'DELETING'|'FAILED',
     *     SnapshotCreationTimestamp: \Aws\Api\DateTimeResult,
     *     SnapshotInitiator: 'USER'|'SYSTEM',
     *     SnapshotInitiatorOperation: 'CreateSnapshot'|'ImportSnapshot'|'SystemCreateSnapshot',
     *     SourceApplicationName?: string|null,
     *     SnapshotFormat: 'CANONICAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
