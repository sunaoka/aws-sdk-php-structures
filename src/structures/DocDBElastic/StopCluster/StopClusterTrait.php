<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\StopCluster;

trait StopClusterTrait
{
    /**
     * @param StopClusterRequest $args
     * @return StopClusterResponse
     */
    public function stopCluster(StopClusterRequest $args)
    {
        $result = parent::stopCluster($args->toArray());
        return new StopClusterResponse($result->toArray());
    }
}
