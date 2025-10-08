<?php

namespace Sunaoka\Aws\Structures\Neptune\ModifyGlobalCluster;

trait ModifyGlobalClusterTrait
{
    /**
     * @param ModifyGlobalClusterRequest $args
     * @return ModifyGlobalClusterResponse
     */
    public function modifyGlobalCluster(ModifyGlobalClusterRequest $args)
    {
        $result = parent::modifyGlobalCluster($args->toArray());
        return new ModifyGlobalClusterResponse($result->toArray());
    }
}
