<?php

namespace Sunaoka\Aws\Structures\Ec2\LockSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SnapshotId
 * @property 'compliance'|'governance'|'compliance-cooloff'|'expired' $LockState
 * @property int $LockDuration
 * @property int $CoolOffPeriod
 * @property \Aws\Api\DateTimeResult $CoolOffPeriodExpiresOn
 * @property \Aws\Api\DateTimeResult $LockCreatedOn
 * @property \Aws\Api\DateTimeResult $LockExpiresOn
 * @property \Aws\Api\DateTimeResult $LockDurationStartTime
 */
class LockSnapshotResponse extends Response
{
}
