<?php

namespace Sunaoka\Aws\Structures\Emr\ModifyCluster;

trait ModifyClusterTrait
{
    /**
     * @param ModifyClusterRequest $args
     * @return ModifyClusterResponse
     */
    public function modifyCluster(ModifyClusterRequest $args)
    {
        $result = parent::modifyCluster($args->toArray());
        return new ModifyClusterResponse($result->toArray());
    }
}
