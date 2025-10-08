<?php

namespace Sunaoka\Aws\Structures\Glue\BatchUpdatePartition;

trait BatchUpdatePartitionTrait
{
    /**
     * @param BatchUpdatePartitionRequest $args
     * @return BatchUpdatePartitionResponse
     */
    public function batchUpdatePartition(BatchUpdatePartitionRequest $args)
    {
        $result = parent::batchUpdatePartition($args->toArray());
        return new BatchUpdatePartitionResponse($result->toArray());
    }
}
