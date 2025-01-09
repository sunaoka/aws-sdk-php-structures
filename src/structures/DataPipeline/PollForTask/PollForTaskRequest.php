<?php

namespace Sunaoka\Aws\Structures\DataPipeline\PollForTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workerGroup
 * @property string $hostname
 * @property Shapes\InstanceIdentity $instanceIdentity
 */
class PollForTaskRequest extends Request
{
    /**
     * @param array{
     *     workerGroup: string,
     *     hostname?: string,
     *     instanceIdentity?: Shapes\InstanceIdentity
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
