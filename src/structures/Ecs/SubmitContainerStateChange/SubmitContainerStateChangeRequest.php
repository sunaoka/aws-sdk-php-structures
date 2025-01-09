<?php

namespace Sunaoka\Aws\Structures\Ecs\SubmitContainerStateChange;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property string $task
 * @property string $containerName
 * @property string $runtimeId
 * @property string $status
 * @property int $exitCode
 * @property string $reason
 * @property list<Shapes\NetworkBinding> $networkBindings
 */
class SubmitContainerStateChangeRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     task?: string,
     *     containerName?: string,
     *     runtimeId?: string,
     *     status?: string,
     *     exitCode?: int,
     *     reason?: string,
     *     networkBindings?: list<Shapes\NetworkBinding>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
