<?php

namespace Sunaoka\Aws\Structures\DocDB\DeleteDBCluster;

trait DeleteDBClusterTrait
{
    /**
     * @param DeleteDBClusterRequest $args
     * @return DeleteDBClusterResponse
     */
    public function deleteDBCluster(DeleteDBClusterRequest $args)
    {
        $result = parent::deleteDBCluster($args->toArray());
        return new DeleteDBClusterResponse($result->toArray());
    }
}
