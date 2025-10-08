<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteColumnStatisticsForPartition;

trait DeleteColumnStatisticsForPartitionTrait
{
    /**
     * @param DeleteColumnStatisticsForPartitionRequest $args
     * @return DeleteColumnStatisticsForPartitionResponse
     */
    public function deleteColumnStatisticsForPartition(DeleteColumnStatisticsForPartitionRequest $args)
    {
        $result = parent::deleteColumnStatisticsForPartition($args->toArray());
        return new DeleteColumnStatisticsForPartitionResponse($result->toArray());
    }
}
