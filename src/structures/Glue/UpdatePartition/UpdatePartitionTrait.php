<?php

namespace Sunaoka\Aws\Structures\Glue\UpdatePartition;

trait UpdatePartitionTrait
{
    /**
     * @param UpdatePartitionRequest $args
     * @return UpdatePartitionResponse
     */
    public function updatePartition(UpdatePartitionRequest $args)
    {
        $result = parent::updatePartition($args->toArray());
        return new UpdatePartitionResponse($result->toArray());
    }
}
