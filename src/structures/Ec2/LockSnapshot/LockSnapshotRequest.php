<?php

namespace Sunaoka\Aws\Structures\Ec2\LockSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 * @property bool $DryRun
 * @property 'compliance'|'governance' $LockMode
 * @property int $CoolOffPeriod
 * @property int $LockDuration
 * @property \Aws\Api\DateTimeResult $ExpirationDate
 */
class LockSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId: string,
     *     DryRun?: bool,
     *     LockMode: 'compliance'|'governance',
     *     CoolOffPeriod?: int,
     *     LockDuration?: int,
     *     ExpirationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
