<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSnapshotTierStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotId
 * @property string $VolumeId
 * @property 'pending'|'completed'|'error'|'recoverable'|'recovering' $Status
 * @property string $OwnerId
 * @property list<Tag> $Tags
 * @property 'archive'|'standard' $StorageTier
 * @property \Aws\Api\DateTimeResult $LastTieringStartTime
 * @property int $LastTieringProgress
 * @property 'archival-in-progress'|'archival-completed'|'archival-failed'|'temporary-restore-in-progress'|'temporary-restore-completed'|'temporary-restore-failed'|'permanent-restore-in-progress'|'permanent-restore-completed'|'permanent-restore-failed' $LastTieringOperationStatus
 * @property string $LastTieringOperationStatusDetail
 * @property \Aws\Api\DateTimeResult $ArchivalCompleteTime
 * @property \Aws\Api\DateTimeResult $RestoreExpiryTime
 */
class SnapshotTierStatus extends Shape
{
    /**
     * @param array{
     *     SnapshotId?: string,
     *     VolumeId?: string,
     *     Status?: 'pending'|'completed'|'error'|'recoverable'|'recovering',
     *     OwnerId?: string,
     *     Tags?: list<Tag>,
     *     StorageTier?: 'archive'|'standard',
     *     LastTieringStartTime?: \Aws\Api\DateTimeResult,
     *     LastTieringProgress?: int,
     *     LastTieringOperationStatus?: 'archival-in-progress'|'archival-completed'|'archival-failed'|'temporary-restore-in-progress'|'temporary-restore-completed'|'temporary-restore-failed'|'permanent-restore-in-progress'|'permanent-restore-completed'|'permanent-restore-failed',
     *     LastTieringOperationStatusDetail?: string,
     *     ArchivalCompleteTime?: \Aws\Api\DateTimeResult,
     *     RestoreExpiryTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
