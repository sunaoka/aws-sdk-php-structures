<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateCluster;

trait UpdateClusterTrait
{
    /**
     * @param UpdateClusterRequest $args
     * @return UpdateClusterResponse
     */
    public function updateCluster(UpdateClusterRequest $args)
    {
        $result = parent::updateCluster($args->toArray());
        return new UpdateClusterResponse($result->toArray());
    }
}
