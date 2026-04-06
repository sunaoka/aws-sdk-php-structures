<?php

namespace Sunaoka\Aws\Structures\PCS\GetCluster;

trait GetClusterTrait
{
    /**
     * @param GetClusterRequest $args
     * @return GetClusterResponse
     */
    public function getCluster(GetClusterRequest $args)
    {
        $result = parent::getCluster($args->toArray());
        return new GetClusterResponse($result->toArray());
    }
}
