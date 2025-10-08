<?php

namespace Sunaoka\Aws\Structures\Glue\CreatePartitionIndex;

trait CreatePartitionIndexTrait
{
    /**
     * @param CreatePartitionIndexRequest $args
     * @return CreatePartitionIndexResponse
     */
    public function createPartitionIndex(CreatePartitionIndexRequest $args)
    {
        $result = parent::createPartitionIndex($args->toArray());
        return new CreatePartitionIndexResponse($result->toArray());
    }
}
