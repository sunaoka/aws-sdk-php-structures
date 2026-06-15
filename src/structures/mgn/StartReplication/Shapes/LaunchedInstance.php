<?php

namespace Sunaoka\Aws\Structures\mgn\StartReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ec2InstanceID
 * @property string|null $jobID
 * @property 'WAITING'|'SUCCEEDED'|'UNKNOWN'|'STOPPED'|null $firstBoot
 * @property list<LastKnownCheck>|null $lastKnownChecks
 * @property 'PASSED'|'FAILED'|'PENDING'|null $lastKnownFsxChecksStatus
 */
class LaunchedInstance extends Shape
{
    /**
     * @param array{
     *     ec2InstanceID?: string|null,
     *     jobID?: string|null,
     *     firstBoot?: 'WAITING'|'SUCCEEDED'|'UNKNOWN'|'STOPPED'|null,
     *     lastKnownChecks?: list<LastKnownCheck>|null,
     *     lastKnownFsxChecksStatus?: 'PASSED'|'FAILED'|'PENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
