<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeImportTasks;

trait DescribeImportTasksTrait
{
    /**
     * @param DescribeImportTasksRequest $args
     * @return DescribeImportTasksResponse
     */
    public function describeImportTasks(DescribeImportTasksRequest $args)
    {
        $result = parent::describeImportTasks($args->toArray());
        return new DescribeImportTasksResponse($result->toArray());
    }
}
