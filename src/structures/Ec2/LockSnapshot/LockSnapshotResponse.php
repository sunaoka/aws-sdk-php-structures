<?php

namespace Sunaoka\Aws\Structures\Ec2\LockSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SnapshotId
 * @property 'compliance'|'governance'|'compliance-cooloff'|'expired'|null $LockState
 * @property int|null $LockDuration
 * @property int|null $CoolOffPeriod
 * @property \Aws\Api\DateTimeResult|null $CoolOffPeriodExpiresOn
 * @property \Aws\Api\DateTimeResult|null $LockCreatedOn
 * @property \Aws\Api\DateTimeResult|null $LockExpiresOn
 * @property \Aws\Api\DateTimeResult|null $LockDurationStartTime
 */
class LockSnapshotResponse extends Response
{
}
