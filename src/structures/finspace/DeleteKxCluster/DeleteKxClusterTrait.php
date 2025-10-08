<?php

namespace Sunaoka\Aws\Structures\finspace\DeleteKxCluster;

trait DeleteKxClusterTrait
{
    /**
     * @param DeleteKxClusterRequest $args
     * @return DeleteKxClusterResponse
     */
    public function deleteKxCluster(DeleteKxClusterRequest $args)
    {
        $result = parent::deleteKxCluster($args->toArray());
        return new DeleteKxClusterResponse($result->toArray());
    }
}
