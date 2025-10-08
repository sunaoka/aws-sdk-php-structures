<?php

namespace Sunaoka\Aws\Structures\Neptune\StopDBCluster;

trait StopDBClusterTrait
{
    /**
     * @param StopDBClusterRequest $args
     * @return StopDBClusterResponse
     */
    public function stopDBCluster(StopDBClusterRequest $args)
    {
        $result = parent::stopDBCluster($args->toArray());
        return new StopDBClusterResponse($result->toArray());
    }
}
