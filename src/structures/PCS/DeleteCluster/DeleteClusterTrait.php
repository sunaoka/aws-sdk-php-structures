<?php

namespace Sunaoka\Aws\Structures\PCS\DeleteCluster;

trait DeleteClusterTrait
{
    /**
     * @param DeleteClusterRequest $args
     * @return DeleteClusterResponse
     */
    public function deleteCluster(DeleteClusterRequest $args)
    {
        $result = parent::deleteCluster($args->toArray());
        return new DeleteClusterResponse($result->toArray());
    }
}
