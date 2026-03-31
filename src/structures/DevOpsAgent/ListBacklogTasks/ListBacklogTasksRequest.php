<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListBacklogTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property Shapes\TaskFilter|null $filter
 * @property int<1, 1000>|null $limit
 * @property string|null $nextToken
 * @property 'CREATED_AT'|'PRIORITY'|null $sortField
 * @property 'ASC'|'DESC'|null $order
 */
class ListBacklogTasksRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     filter?: Shapes\TaskFilter|null,
     *     limit?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     sortField?: 'CREATED_AT'|'PRIORITY'|null,
     *     order?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
