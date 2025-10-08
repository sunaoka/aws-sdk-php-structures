<?php

namespace Sunaoka\Aws\Structures\Glue\DeletePartition;

trait DeletePartitionTrait
{
    /**
     * @param DeletePartitionRequest $args
     * @return DeletePartitionResponse
     */
    public function deletePartition(DeletePartitionRequest $args)
    {
        $result = parent::deletePartition($args->toArray());
        return new DeletePartitionResponse($result->toArray());
    }
}
