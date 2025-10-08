<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttackStatistics;

trait DescribeAttackStatisticsTrait
{
    /**
     * @param DescribeAttackStatisticsRequest $args
     * @return DescribeAttackStatisticsResponse
     */
    public function describeAttackStatistics(DescribeAttackStatisticsRequest $args)
    {
        $result = parent::describeAttackStatistics($args->toArray());
        return new DescribeAttackStatisticsResponse($result->toArray());
    }
}
