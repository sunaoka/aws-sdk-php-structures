<?php

namespace Sunaoka\Aws\Structures\DataPipeline\PollForTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workerGroup
 * @property string|null $hostname
 * @property Shapes\InstanceIdentity|null $instanceIdentity
 */
class PollForTaskRequest extends Request
{
    /**
     * @param array{
     *     workerGroup: string,
     *     hostname?: string|null,
     *     instanceIdentity?: Shapes\InstanceIdentity|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
