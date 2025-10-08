<?php

namespace Sunaoka\Aws\Structures\Rds\BacktrackDBCluster;

trait BacktrackDBClusterTrait
{
    /**
     * @param BacktrackDBClusterRequest $args
     * @return BacktrackDBClusterResponse
     */
    public function backtrackDBCluster(BacktrackDBClusterRequest $args)
    {
        $result = parent::backtrackDBCluster($args->toArray());
        return new BacktrackDBClusterResponse($result->toArray());
    }
}
