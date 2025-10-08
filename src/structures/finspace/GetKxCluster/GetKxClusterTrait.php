<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxCluster;

trait GetKxClusterTrait
{
    /**
     * @param GetKxClusterRequest $args
     * @return GetKxClusterResponse
     */
    public function getKxCluster(GetKxClusterRequest $args)
    {
        $result = parent::getKxCluster($args->toArray());
        return new GetKxClusterResponse($result->toArray());
    }
}
