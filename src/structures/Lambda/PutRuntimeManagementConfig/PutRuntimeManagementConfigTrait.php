<?php

namespace Sunaoka\Aws\Structures\Lambda\PutRuntimeManagementConfig;

trait PutRuntimeManagementConfigTrait
{
    /**
     * @param PutRuntimeManagementConfigRequest $args
     * @return PutRuntimeManagementConfigResponse
     */
    public function putRuntimeManagementConfig(PutRuntimeManagementConfigRequest $args)
    {
        $result = parent::putRuntimeManagementConfig($args->toArray());
        return new PutRuntimeManagementConfigResponse($result->toArray());
    }
}
