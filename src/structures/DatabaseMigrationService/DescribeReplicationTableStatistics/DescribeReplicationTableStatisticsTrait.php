<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTableStatistics;

trait DescribeReplicationTableStatisticsTrait
{
    /**
     * @param DescribeReplicationTableStatisticsRequest $args
     * @return DescribeReplicationTableStatisticsResponse
     */
    public function describeReplicationTableStatistics(DescribeReplicationTableStatisticsRequest $args)
    {
        $result = parent::describeReplicationTableStatistics($args->toArray());
        return new DescribeReplicationTableStatisticsResponse($result->toArray());
    }
}
