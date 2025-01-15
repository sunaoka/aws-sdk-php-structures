<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeDataRepositoryTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $TaskIds
 * @property list<Shapes\DataRepositoryTaskFilter>|null $Filters
 * @property int<1, 2147483647>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeDataRepositoryTasksRequest extends Request
{
    /**
     * @param array{
     *     TaskIds?: list<string>|null,
     *     Filters?: list<Shapes\DataRepositoryTaskFilter>|null,
     *     MaxResults?: int<1, 2147483647>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
