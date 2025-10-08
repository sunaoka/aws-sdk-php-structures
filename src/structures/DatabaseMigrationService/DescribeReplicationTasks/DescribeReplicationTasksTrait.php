<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTasks;

trait DescribeReplicationTasksTrait
{
    /**
     * @param DescribeReplicationTasksRequest $args
     * @return DescribeReplicationTasksResponse
     */
    public function describeReplicationTasks(DescribeReplicationTasksRequest $args)
    {
        $result = parent::describeReplicationTasks($args->toArray());
        return new DescribeReplicationTasksResponse($result->toArray());
    }
}
