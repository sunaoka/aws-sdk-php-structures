<?php

namespace Sunaoka\Aws\Structures\Lambda\GetRuntimeManagementConfig;

trait GetRuntimeManagementConfigTrait
{
    /**
     * @param GetRuntimeManagementConfigRequest $args
     * @return GetRuntimeManagementConfigResponse
     */
    public function getRuntimeManagementConfig(GetRuntimeManagementConfigRequest $args)
    {
        $result = parent::getRuntimeManagementConfig($args->toArray());
        return new GetRuntimeManagementConfigResponse($result->toArray());
    }
}
