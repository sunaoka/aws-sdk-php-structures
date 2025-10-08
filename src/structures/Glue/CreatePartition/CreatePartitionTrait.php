<?php

namespace Sunaoka\Aws\Structures\Glue\CreatePartition;

trait CreatePartitionTrait
{
    /**
     * @param CreatePartitionRequest $args
     * @return CreatePartitionResponse
     */
    public function createPartition(CreatePartitionRequest $args)
    {
        $result = parent::createPartition($args->toArray());
        return new CreatePartitionResponse($result->toArray());
    }
}
