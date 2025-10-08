<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImportSnapshotTasks;

trait DescribeImportSnapshotTasksTrait
{
    /**
     * @param DescribeImportSnapshotTasksRequest $args
     * @return DescribeImportSnapshotTasksResponse
     */
    public function describeImportSnapshotTasks(DescribeImportSnapshotTasksRequest $args)
    {
        $result = parent::describeImportSnapshotTasks($args->toArray());
        return new DescribeImportSnapshotTasksResponse($result->toArray());
    }
}
