<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeregisterEcsCluster;

trait DeregisterEcsClusterTrait
{
    /**
     * @param DeregisterEcsClusterRequest $args
     * @return void
     */
    public function deregisterEcsCluster(DeregisterEcsClusterRequest $args)
    {
        parent::deregisterEcsCluster($args->toArray());
    }
}
