<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTasks;

trait DescribeTasksTrait
{
    /**
     * @param DescribeTasksRequest $args
     * @return DescribeTasksResponse
     */
    public function describeTasks(DescribeTasksRequest $args)
    {
        $result = parent::describeTasks($args->toArray());
        return new DescribeTasksResponse($result->toArray());
    }
}
