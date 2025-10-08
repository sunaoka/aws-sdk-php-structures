<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeStoreImageTasks;

trait DescribeStoreImageTasksTrait
{
    /**
     * @param DescribeStoreImageTasksRequest $args
     * @return DescribeStoreImageTasksResponse
     */
    public function describeStoreImageTasks(DescribeStoreImageTasksRequest $args)
    {
        $result = parent::describeStoreImageTasks($args->toArray());
        return new DescribeStoreImageTasksResponse($result->toArray());
    }
}
