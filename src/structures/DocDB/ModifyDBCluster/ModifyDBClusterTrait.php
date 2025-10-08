<?php

namespace Sunaoka\Aws\Structures\DocDB\ModifyDBCluster;

trait ModifyDBClusterTrait
{
    /**
     * @param ModifyDBClusterRequest $args
     * @return ModifyDBClusterResponse
     */
    public function modifyDBCluster(ModifyDBClusterRequest $args)
    {
        $result = parent::modifyDBCluster($args->toArray());
        return new ModifyDBClusterResponse($result->toArray());
    }
}
