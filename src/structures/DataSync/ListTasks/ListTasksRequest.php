<?php

namespace Sunaoka\Aws\Structures\DataSync\ListTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\TaskFilter>|null $Filters
 */
class ListTasksRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<0, 100>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\TaskFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
