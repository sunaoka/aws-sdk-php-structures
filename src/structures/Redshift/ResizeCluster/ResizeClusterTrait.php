<?php

namespace Sunaoka\Aws\Structures\Redshift\ResizeCluster;

trait ResizeClusterTrait
{
    /**
     * @param ResizeClusterRequest $args
     * @return ResizeClusterResponse
     */
    public function resizeCluster(ResizeClusterRequest $args)
    {
        $result = parent::resizeCluster($args->toArray());
        return new ResizeClusterResponse($result->toArray());
    }
}
