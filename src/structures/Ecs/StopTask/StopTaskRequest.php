<?php

namespace Sunaoka\Aws\Structures\Ecs\StopTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property string $task
 * @property string $reason
 */
class StopTaskRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     task: string,
     *     reason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
