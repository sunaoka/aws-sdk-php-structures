<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListTagSyncTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ListTagSyncTasksFilter> $Filters
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListTagSyncTasksRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\ListTagSyncTasksFilter>,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
