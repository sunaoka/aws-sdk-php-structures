<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListTagSyncTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ListTagSyncTasksFilter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListTagSyncTasksRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\ListTagSyncTasksFilter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
