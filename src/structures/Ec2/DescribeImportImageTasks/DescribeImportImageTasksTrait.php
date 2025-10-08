<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImportImageTasks;

trait DescribeImportImageTasksTrait
{
    /**
     * @param DescribeImportImageTasksRequest $args
     * @return DescribeImportImageTasksResponse
     */
    public function describeImportImageTasks(DescribeImportImageTasksRequest $args)
    {
        $result = parent::describeImportImageTasks($args->toArray());
        return new DescribeImportImageTasksResponse($result->toArray());
    }
}
