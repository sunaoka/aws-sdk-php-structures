<?php

namespace Sunaoka\Aws\Structures\EMRContainers\UpdateVirtualCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property Shapes\SchedulerConfiguration|null $schedulerConfiguration
 * @property string $clientToken
 */
class UpdateVirtualClusterRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     schedulerConfiguration?: Shapes\SchedulerConfiguration|null,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
