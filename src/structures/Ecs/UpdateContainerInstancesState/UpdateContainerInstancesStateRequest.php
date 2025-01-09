<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateContainerInstancesState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property list<string> $containerInstances
 * @property 'ACTIVE'|'DRAINING'|'REGISTERING'|'DEREGISTERING'|'REGISTRATION_FAILED' $status
 */
class UpdateContainerInstancesStateRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     containerInstances: list<string>,
     *     status: 'ACTIVE'|'DRAINING'|'REGISTERING'|'DEREGISTERING'|'REGISTRATION_FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
