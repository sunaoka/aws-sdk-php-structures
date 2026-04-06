<?php

namespace Sunaoka\Aws\Structures\Neptune\SwitchoverGlobalCluster;

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
