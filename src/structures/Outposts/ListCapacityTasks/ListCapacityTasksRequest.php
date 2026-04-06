<?php

namespace Sunaoka\Aws\Structures\Outposts\ListCapacityTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $OutpostIdentifierFilter
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property list<'REQUESTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|'WAITING_FOR_EVACUATION'|'CANCELLATION_IN_PROGRESS'|'CANCELLED'>|null $CapacityTaskStatusFilter
 */
class ListCapacityTasksRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifierFilter?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     CapacityTaskStatusFilter?: list<'REQUESTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|'WAITING_FOR_EVACUATION'|'CANCELLATION_IN_PROGRESS'|'CANCELLED'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
