<?php

namespace Sunaoka\Aws\Structures\Glue\DeletePartitionIndex;

trait DeletePartitionIndexTrait
{
    /**
     * @param DeletePartitionIndexRequest $args
     * @return DeletePartitionIndexResponse
     */
    public function deletePartitionIndex(DeletePartitionIndexRequest $args)
    {
        $result = parent::deletePartitionIndex($args->toArray());
        return new DeletePartitionIndexResponse($result->toArray());
    }
}
