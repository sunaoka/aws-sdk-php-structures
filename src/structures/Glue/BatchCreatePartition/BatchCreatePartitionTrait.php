<?php

namespace Sunaoka\Aws\Structures\Glue\BatchCreatePartition;

trait BatchCreatePartitionTrait
{
    /**
     * @param BatchCreatePartitionRequest $args
     * @return BatchCreatePartitionResponse
     */
    public function batchCreatePartition(BatchCreatePartitionRequest $args)
    {
        $result = parent::batchCreatePartition($args->toArray());
        return new BatchCreatePartitionResponse($result->toArray());
    }
}
