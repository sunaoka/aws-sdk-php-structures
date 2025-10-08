<?php

namespace Sunaoka\Aws\Structures\MemoryDB\BatchUpdateCluster;

trait BatchUpdateClusterTrait
{
    /**
     * @param BatchUpdateClusterRequest $args
     * @return BatchUpdateClusterResponse
     */
    public function batchUpdateCluster(BatchUpdateClusterRequest $args)
    {
        $result = parent::batchUpdateCluster($args->toArray());
        return new BatchUpdateClusterResponse($result->toArray());
    }
}
