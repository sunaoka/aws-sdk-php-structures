<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetThreatModelJobTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property list<string> $threatModelJobTaskIds
 */
class BatchGetThreatModelJobTasksRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     threatModelJobTaskIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
