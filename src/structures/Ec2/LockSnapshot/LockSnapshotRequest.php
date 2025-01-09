<?php

namespace Sunaoka\Aws\Structures\Ec2\LockSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 * @property bool $DryRun
 * @property 'compliance'|'governance' $LockMode
 * @property int<1, 72> $CoolOffPeriod
 * @property int<1, 36500> $LockDuration
 * @property \Aws\Api\DateTimeResult $ExpirationDate
 */
class LockSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId: string,
     *     DryRun?: bool,
     *     LockMode: 'compliance'|'governance',
     *     CoolOffPeriod?: int<1, 72>,
     *     LockDuration?: int<1, 36500>,
     *     ExpirationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
