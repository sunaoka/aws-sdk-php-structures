<?php

namespace Sunaoka\Aws\Structures\Ecs\StopTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property string $task
 * @property string|null $reason
 */
class StopTaskRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     task: string,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
