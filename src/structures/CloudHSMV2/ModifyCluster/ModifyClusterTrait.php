<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\ModifyCluster;

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
