<?php

namespace Sunaoka\Aws\Structures\Ec2\LockSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 * @property bool|null $DryRun
 * @property 'compliance'|'governance' $LockMode
 * @property int<1, 72>|null $CoolOffPeriod
 * @property int<1, 36500>|null $LockDuration
 * @property \Aws\Api\DateTimeResult|null $ExpirationDate
 */
class LockSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId: string,
     *     DryRun?: bool|null,
     *     LockMode: 'compliance'|'governance',
     *     CoolOffPeriod?: int<1, 72>|null,
     *     LockDuration?: int<1, 36500>|null,
     *     ExpirationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
