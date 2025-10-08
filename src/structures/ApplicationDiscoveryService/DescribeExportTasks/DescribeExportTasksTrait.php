<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeExportTasks;

trait DescribeExportTasksTrait
{
    /**
     * @param DescribeExportTasksRequest $args
     * @return DescribeExportTasksResponse
     */
    public function describeExportTasks(DescribeExportTasksRequest $args)
    {
        $result = parent::describeExportTasks($args->toArray());
        return new DescribeExportTasksResponse($result->toArray());
    }
}
