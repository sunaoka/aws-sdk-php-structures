<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateNodegroupConfig;

trait UpdateNodegroupConfigTrait
{
    /**
     * @param UpdateNodegroupConfigRequest $args
     * @return UpdateNodegroupConfigResponse
     */
    public function updateNodegroupConfig(UpdateNodegroupConfigRequest $args)
    {
        $result = parent::updateNodegroupConfig($args->toArray());
        return new UpdateNodegroupConfigResponse($result->toArray());
    }
}
