<?php

namespace Sunaoka\Aws\Structures\mgn\StartTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'IN_PROGRESS'|'LAUNCHED'|'FAILED'|'TERMINATED' $launchStatus
 * @property string $launchedEc2InstanceID
 * @property PostLaunchActionsStatus $postLaunchActionsStatus
 * @property string $sourceServerID
 */
class ParticipatingServer extends Shape
{
    /**
     * @param array{
     *     launchStatus?: 'PENDING'|'IN_PROGRESS'|'LAUNCHED'|'FAILED'|'TERMINATED',
     *     launchedEc2InstanceID?: string,
     *     postLaunchActionsStatus?: PostLaunchActionsStatus,
     *     sourceServerID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
