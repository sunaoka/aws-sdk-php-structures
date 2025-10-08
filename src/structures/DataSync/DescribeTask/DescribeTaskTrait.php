<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTask;

trait DescribeTaskTrait
{
    /**
     * @param DescribeTaskRequest $args
     * @return DescribeTaskResponse
     */
    public function describeTask(DescribeTaskRequest $args)
    {
        $result = parent::describeTask($args->toArray());
        return new DescribeTaskResponse($result->toArray());
    }
}
