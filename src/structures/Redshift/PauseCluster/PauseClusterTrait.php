<?php

namespace Sunaoka\Aws\Structures\Redshift\PauseCluster;

trait PauseClusterTrait
{
    /**
     * @param PauseClusterRequest $args
     * @return PauseClusterResponse
     */
    public function pauseCluster(PauseClusterRequest $args)
    {
        $result = parent::pauseCluster($args->toArray());
        return new PauseClusterResponse($result->toArray());
    }
}
