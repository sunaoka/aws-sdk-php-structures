<?php

namespace Sunaoka\Aws\Structures\DocDB\DeleteGlobalCluster;

trait DeleteGlobalClusterTrait
{
    /**
     * @param DeleteGlobalClusterRequest $args
     * @return DeleteGlobalClusterResponse
     */
    public function deleteGlobalCluster(DeleteGlobalClusterRequest $args)
    {
        $result = parent::deleteGlobalCluster($args->toArray());
        return new DeleteGlobalClusterResponse($result->toArray());
    }
}
