<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListApplicationSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotName
 * @property 'CREATING'|'READY'|'DELETING'|'FAILED' $SnapshotStatus
 * @property int<1, 999999999> $ApplicationVersionId
 * @property \Aws\Api\DateTimeResult|null $SnapshotCreationTimestamp
 */
class SnapshotDetails extends Shape
{
    /**
     * @param array{
     *     SnapshotName: string,
     *     SnapshotStatus: 'CREATING'|'READY'|'DELETING'|'FAILED',
     *     ApplicationVersionId: int<1, 999999999>,
     *     SnapshotCreationTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
