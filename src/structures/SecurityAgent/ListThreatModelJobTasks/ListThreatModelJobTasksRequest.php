<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListThreatModelJobTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property int|null $maxResults
 * @property string $threatModelJobId
 * @property string|null $nextToken
 */
class ListThreatModelJobTasksRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     maxResults?: int|null,
     *     threatModelJobId: string,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
