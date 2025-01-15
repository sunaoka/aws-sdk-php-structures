<?php

namespace Sunaoka\Aws\Structures\mgn\TerminateTargetInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'IN_PROGRESS'|'LAUNCHED'|'FAILED'|'TERMINATED'|null $launchStatus
 * @property string|null $launchedEc2InstanceID
 * @property PostLaunchActionsStatus|null $postLaunchActionsStatus
 * @property string $sourceServerID
 */
class ParticipatingServer extends Shape
{
    /**
     * @param array{
     *     launchStatus?: 'PENDING'|'IN_PROGRESS'|'LAUNCHED'|'FAILED'|'TERMINATED'|null,
     *     launchedEc2InstanceID?: string|null,
     *     postLaunchActionsStatus?: PostLaunchActionsStatus|null,
     *     sourceServerID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
