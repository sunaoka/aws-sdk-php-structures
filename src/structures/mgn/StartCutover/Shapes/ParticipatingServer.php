<?php

namespace Sunaoka\Aws\Structures\mgn\StartCutover\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceServerID
 * @property 'PENDING'|'IN_PROGRESS'|'LAUNCHED'|'FAILED'|'TERMINATED'|null $launchStatus
 * @property string|null $launchedEc2InstanceID
 * @property PostLaunchActionsStatus|null $postLaunchActionsStatus
 */
class ParticipatingServer extends Shape
{
    /**
     * @param array{
     *     sourceServerID: string,
     *     launchStatus?: 'PENDING'|'IN_PROGRESS'|'LAUNCHED'|'FAILED'|'TERMINATED'|null,
     *     launchedEc2InstanceID?: string|null,
     *     postLaunchActionsStatus?: PostLaunchActionsStatus|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
