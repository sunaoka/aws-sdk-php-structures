<?php

namespace Sunaoka\Aws\Structures\DocDB\SwitchoverGlobalCluster;

trait SwitchoverGlobalClusterTrait
{
    /**
     * @param SwitchoverGlobalClusterRequest $args
     * @return SwitchoverGlobalClusterResponse
     */
    public function switchoverGlobalCluster(SwitchoverGlobalClusterRequest $args)
    {
        $result = parent::switchoverGlobalCluster($args->toArray());
        return new SwitchoverGlobalClusterResponse($result->toArray());
    }
}
