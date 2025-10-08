<?php

namespace Sunaoka\Aws\Structures\Neptune\StartDBCluster;

trait StartDBClusterTrait
{
    /**
     * @param StartDBClusterRequest $args
     * @return StartDBClusterResponse
     */
    public function startDBCluster(StartDBClusterRequest $args)
    {
        $result = parent::startDBCluster($args->toArray());
        return new StartDBClusterResponse($result->toArray());
    }
}
