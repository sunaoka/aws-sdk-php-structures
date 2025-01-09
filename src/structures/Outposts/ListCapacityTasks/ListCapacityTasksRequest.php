<?php

namespace Sunaoka\Aws\Structures\Outposts\ListCapacityTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostIdentifierFilter
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 * @property list<'REQUESTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|'WAITING_FOR_EVACUATION'|'CANCELLATION_IN_PROGRESS'|'CANCELLED'> $CapacityTaskStatusFilter
 */
class ListCapacityTasksRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifierFilter?: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string,
     *     CapacityTaskStatusFilter?: list<'REQUESTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|'WAITING_FOR_EVACUATION'|'CANCELLATION_IN_PROGRESS'|'CANCELLED'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
