<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeTableStatistics;

trait DescribeTableStatisticsTrait
{
    /**
     * @param DescribeTableStatisticsRequest $args
     * @return DescribeTableStatisticsResponse
     */
    public function describeTableStatistics(DescribeTableStatisticsRequest $args)
    {
        $result = parent::describeTableStatistics($args->toArray());
        return new DescribeTableStatisticsResponse($result->toArray());
    }
}
