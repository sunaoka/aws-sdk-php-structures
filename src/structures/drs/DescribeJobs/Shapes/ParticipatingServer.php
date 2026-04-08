<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceServerID
 * @property string|null $recoveryInstanceID
 * @property 'PENDING'|'IN_PROGRESS'|'LAUNCHED'|'FAILED'|'TERMINATED'|null $launchStatus
 * @property LaunchActionsStatus|null $launchActionsStatus
 */
class ParticipatingServer extends Shape
{
    /**
     * @param array{
     *     sourceServerID?: string|null,
     *     recoveryInstanceID?: string|null,
     *     launchStatus?: 'PENDING'|'IN_PROGRESS'|'LAUNCHED'|'FAILED'|'TERMINATED'|null,
     *     launchActionsStatus?: LaunchActionsStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
