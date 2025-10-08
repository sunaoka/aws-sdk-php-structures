<?php

namespace Sunaoka\Aws\Structures\Glue\BatchDeletePartition;

trait BatchDeletePartitionTrait
{
    /**
     * @param BatchDeletePartitionRequest $args
     * @return BatchDeletePartitionResponse
     */
    public function batchDeletePartition(BatchDeletePartitionRequest $args)
    {
        $result = parent::batchDeletePartition($args->toArray());
        return new BatchDeletePartitionResponse($result->toArray());
    }
}
