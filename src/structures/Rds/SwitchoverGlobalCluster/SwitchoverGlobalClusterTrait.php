<?php

namespace Sunaoka\Aws\Structures\Rds\SwitchoverGlobalCluster;

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
