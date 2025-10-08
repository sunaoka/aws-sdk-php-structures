<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeDataRepositoryTasks;

trait DescribeDataRepositoryTasksTrait
{
    /**
     * @param DescribeDataRepositoryTasksRequest $args
     * @return DescribeDataRepositoryTasksResponse
     */
    public function describeDataRepositoryTasks(DescribeDataRepositoryTasksRequest $args)
    {
        $result = parent::describeDataRepositoryTasks($args->toArray());
        return new DescribeDataRepositoryTasksResponse($result->toArray());
    }
}
