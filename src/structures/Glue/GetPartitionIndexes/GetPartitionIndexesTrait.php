<?php

namespace Sunaoka\Aws\Structures\Glue\GetPartitionIndexes;

trait GetPartitionIndexesTrait
{
    /**
     * @param GetPartitionIndexesRequest $args
     * @return GetPartitionIndexesResponse
     */
    public function getPartitionIndexes(GetPartitionIndexesRequest $args)
    {
        $result = parent::getPartitionIndexes($args->toArray());
        return new GetPartitionIndexesResponse($result->toArray());
    }
}
