<?php

namespace Sunaoka\Aws\Structures\Glue\GetPartition;

trait GetPartitionTrait
{
    /**
     * @param GetPartitionRequest $args
     * @return GetPartitionResponse
     */
    public function getPartition(GetPartitionRequest $args)
    {
        $result = parent::getPartition($args->toArray());
        return new GetPartitionResponse($result->toArray());
    }
}
