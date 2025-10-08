<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeTask;

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
