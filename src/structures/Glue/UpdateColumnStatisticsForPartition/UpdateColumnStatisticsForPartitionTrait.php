<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateColumnStatisticsForPartition;

trait UpdateColumnStatisticsForPartitionTrait
{
    /**
     * @param UpdateColumnStatisticsForPartitionRequest $args
     * @return UpdateColumnStatisticsForPartitionResponse
     */
    public function updateColumnStatisticsForPartition(UpdateColumnStatisticsForPartitionRequest $args)
    {
        $result = parent::updateColumnStatisticsForPartition($args->toArray());
        return new UpdateColumnStatisticsForPartitionResponse($result->toArray());
    }
}
