<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateClusterConfig;

trait UpdateClusterConfigTrait
{
    /**
     * @param UpdateClusterConfigRequest $args
     * @return UpdateClusterConfigResponse
     */
    public function updateClusterConfig(UpdateClusterConfigRequest $args)
    {
        $result = parent::updateClusterConfig($args->toArray());
        return new UpdateClusterConfigResponse($result->toArray());
    }
}
