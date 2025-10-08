<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeExportImageTasks;

trait DescribeExportImageTasksTrait
{
    /**
     * @param DescribeExportImageTasksRequest $args
     * @return DescribeExportImageTasksResponse
     */
    public function describeExportImageTasks(DescribeExportImageTasksRequest $args)
    {
        $result = parent::describeExportImageTasks($args->toArray());
        return new DescribeExportImageTasksResponse($result->toArray());
    }
}
