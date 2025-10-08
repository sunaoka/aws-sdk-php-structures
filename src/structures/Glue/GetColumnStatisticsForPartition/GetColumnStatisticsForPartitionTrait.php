<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsForPartition;

trait GetColumnStatisticsForPartitionTrait
{
    /**
     * @param GetColumnStatisticsForPartitionRequest $args
     * @return GetColumnStatisticsForPartitionResponse
     */
    public function getColumnStatisticsForPartition(GetColumnStatisticsForPartitionRequest $args)
    {
        $result = parent::getColumnStatisticsForPartition($args->toArray());
        return new GetColumnStatisticsForPartitionResponse($result->toArray());
    }
}
