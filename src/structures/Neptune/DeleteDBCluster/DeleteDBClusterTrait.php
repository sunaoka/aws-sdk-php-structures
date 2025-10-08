<?php

namespace Sunaoka\Aws\Structures\Neptune\DeleteDBCluster;

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
