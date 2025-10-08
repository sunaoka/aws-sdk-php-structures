<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationInstanceTaskLogs;

trait DescribeReplicationInstanceTaskLogsTrait
{
    /**
     * @param DescribeReplicationInstanceTaskLogsRequest $args
     * @return DescribeReplicationInstanceTaskLogsResponse
     */
    public function describeReplicationInstanceTaskLogs(DescribeReplicationInstanceTaskLogsRequest $args)
    {
        $result = parent::describeReplicationInstanceTaskLogs($args->toArray());
        return new DescribeReplicationInstanceTaskLogsResponse($result->toArray());
    }
}
