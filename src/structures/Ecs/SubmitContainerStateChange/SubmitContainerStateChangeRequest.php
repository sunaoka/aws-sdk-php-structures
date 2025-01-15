<?php

namespace Sunaoka\Aws\Structures\Ecs\SubmitContainerStateChange;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property string|null $task
 * @property string|null $containerName
 * @property string|null $runtimeId
 * @property string|null $status
 * @property int|null $exitCode
 * @property string|null $reason
 * @property list<Shapes\NetworkBinding>|null $networkBindings
 */
class SubmitContainerStateChangeRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     task?: string|null,
     *     containerName?: string|null,
     *     runtimeId?: string|null,
     *     status?: string|null,
     *     exitCode?: int|null,
     *     reason?: string|null,
     *     networkBindings?: list<Shapes\NetworkBinding>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
