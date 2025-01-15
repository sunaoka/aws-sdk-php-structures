<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSnapshotTierStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SnapshotId
 * @property string|null $VolumeId
 * @property 'pending'|'completed'|'error'|'recoverable'|'recovering'|null $Status
 * @property string|null $OwnerId
 * @property list<Tag>|null $Tags
 * @property 'archive'|'standard'|null $StorageTier
 * @property \Aws\Api\DateTimeResult|null $LastTieringStartTime
 * @property int|null $LastTieringProgress
 * @property 'archival-in-progress'|'archival-completed'|'archival-failed'|'temporary-restore-in-progress'|'temporary-restore-completed'|'temporary-restore-failed'|'permanent-restore-in-progress'|'permanent-restore-completed'|'permanent-restore-failed'|null $LastTieringOperationStatus
 * @property string|null $LastTieringOperationStatusDetail
 * @property \Aws\Api\DateTimeResult|null $ArchivalCompleteTime
 * @property \Aws\Api\DateTimeResult|null $RestoreExpiryTime
 */
class SnapshotTierStatus extends Shape
{
    /**
     * @param array{
     *     SnapshotId?: string|null,
     *     VolumeId?: string|null,
     *     Status?: 'pending'|'completed'|'error'|'recoverable'|'recovering'|null,
     *     OwnerId?: string|null,
     *     Tags?: list<Tag>|null,
     *     StorageTier?: 'archive'|'standard'|null,
     *     LastTieringStartTime?: \Aws\Api\DateTimeResult|null,
     *     LastTieringProgress?: int|null,
     *     LastTieringOperationStatus?: 'archival-in-progress'|'archival-completed'|'archival-failed'|'temporary-restore-in-progress'|'temporary-restore-completed'|'temporary-restore-failed'|'permanent-restore-in-progress'|'permanent-restore-completed'|'permanent-restore-failed'|null,
     *     LastTieringOperationStatusDetail?: string|null,
     *     ArchivalCompleteTime?: \Aws\Api\DateTimeResult|null,
     *     RestoreExpiryTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
