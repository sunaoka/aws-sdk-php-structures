<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetPartition;

trait BatchGetPartitionTrait
{
    /**
     * @param BatchGetPartitionRequest $args
     * @return BatchGetPartitionResponse
     */
    public function batchGetPartition(BatchGetPartitionRequest $args)
    {
        $result = parent::batchGetPartition($args->toArray());
        return new BatchGetPartitionResponse($result->toArray());
    }
}
