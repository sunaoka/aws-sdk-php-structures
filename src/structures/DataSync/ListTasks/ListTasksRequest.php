<?php

namespace Sunaoka\Aws\Structures\DataSync\ListTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<Shapes\TaskFilter> $Filters
 */
class ListTasksRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Filters?: list<Shapes\TaskFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
