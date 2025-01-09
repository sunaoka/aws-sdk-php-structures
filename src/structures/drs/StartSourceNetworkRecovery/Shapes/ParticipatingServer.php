<?php

namespace Sunaoka\Aws\Structures\drs\StartSourceNetworkRecovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LaunchActionsStatus $launchActionsStatus
 * @property 'PENDING'|'IN_PROGRESS'|'LAUNCHED'|'FAILED'|'TERMINATED' $launchStatus
 * @property string $recoveryInstanceID
 * @property string $sourceServerID
 */
class ParticipatingServer extends Shape
{
    /**
     * @param array{
     *     launchActionsStatus?: LaunchActionsStatus,
     *     launchStatus?: 'PENDING'|'IN_PROGRESS'|'LAUNCHED'|'FAILED'|'TERMINATED',
     *     recoveryInstanceID?: string,
     *     sourceServerID?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
