<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeDataRepositoryTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TaskIds
 * @property list<Shapes\DataRepositoryTaskFilter> $Filters
 * @property int<1, 2147483647> $MaxResults
 * @property string $NextToken
 */
class DescribeDataRepositoryTasksRequest extends Request
{
    /**
     * @param array{
     *     TaskIds?: list<string>,
     *     Filters?: list<Shapes\DataRepositoryTaskFilter>,
     *     MaxResults?: int<1, 2147483647>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
