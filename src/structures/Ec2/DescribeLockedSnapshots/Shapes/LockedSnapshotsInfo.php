<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLockedSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property string $SnapshotId
 * @property 'compliance'|'governance'|'compliance-cooloff'|'expired' $LockState
 * @property int $LockDuration
 * @property int $CoolOffPeriod
 * @property \Aws\Api\DateTimeResult $CoolOffPeriodExpiresOn
 * @property \Aws\Api\DateTimeResult $LockCreatedOn
 * @property \Aws\Api\DateTimeResult $LockDurationStartTime
 * @property \Aws\Api\DateTimeResult $LockExpiresOn
 */
class LockedSnapshotsInfo extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string,
     *     SnapshotId?: string,
     *     LockState?: 'compliance'|'governance'|'compliance-cooloff'|'expired',
     *     LockDuration?: int,
     *     CoolOffPeriod?: int,
     *     CoolOffPeriodExpiresOn?: \Aws\Api\DateTimeResult,
     *     LockCreatedOn?: \Aws\Api\DateTimeResult,
     *     LockDurationStartTime?: \Aws\Api\DateTimeResult,
     *     LockExpiresOn?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
