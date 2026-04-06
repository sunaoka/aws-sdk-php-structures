<?php

namespace Sunaoka\Aws\Structures\OpsWorks\RegisterEcsCluster;

trait RegisterEcsClusterTrait
{
    /**
     * @param RegisterEcsClusterRequest $args
     * @return RegisterEcsClusterResponse
     */
    public function registerEcsCluster(RegisterEcsClusterRequest $args)
    {
        $result = parent::registerEcsCluster($args->toArray());
        return new RegisterEcsClusterResponse($result->toArray());
    }
}
