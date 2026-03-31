<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetBacklogTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $taskId
 */
class GetBacklogTaskRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     taskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
