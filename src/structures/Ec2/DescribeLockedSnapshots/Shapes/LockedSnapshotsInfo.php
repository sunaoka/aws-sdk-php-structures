<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLockedSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property string|null $SnapshotId
 * @property 'compliance'|'governance'|'compliance-cooloff'|'expired'|null $LockState
 * @property int|null $LockDuration
 * @property int|null $CoolOffPeriod
 * @property \Aws\Api\DateTimeResult|null $CoolOffPeriodExpiresOn
 * @property \Aws\Api\DateTimeResult|null $LockCreatedOn
 * @property \Aws\Api\DateTimeResult|null $LockDurationStartTime
 * @property \Aws\Api\DateTimeResult|null $LockExpiresOn
 */
class LockedSnapshotsInfo extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     SnapshotId?: string|null,
     *     LockState?: 'compliance'|'governance'|'compliance-cooloff'|'expired'|null,
     *     LockDuration?: int|null,
     *     CoolOffPeriod?: int|null,
     *     CoolOffPeriodExpiresOn?: \Aws\Api\DateTimeResult|null,
     *     LockCreatedOn?: \Aws\Api\DateTimeResult|null,
     *     LockDurationStartTime?: \Aws\Api\DateTimeResult|null,
     *     LockExpiresOn?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
