<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListTagSyncTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ListTagSyncTasksFilter>|null $Filters
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListTagSyncTasksRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\ListTagSyncTasksFilter>|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
