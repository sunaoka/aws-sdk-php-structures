<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LaunchActionsStatus|null $launchActionsStatus
 * @property 'PENDING'|'IN_PROGRESS'|'LAUNCHED'|'FAILED'|'TERMINATED'|null $launchStatus
 * @property string|null $recoveryInstanceID
 * @property string|null $sourceServerID
 */
class ParticipatingServer extends Shape
{
    /**
     * @param array{
     *     launchActionsStatus?: LaunchActionsStatus|null,
     *     launchStatus?: 'PENDING'|'IN_PROGRESS'|'LAUNCHED'|'FAILED'|'TERMINATED'|null,
     *     recoveryInstanceID?: string|null,
     *     sourceServerID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
