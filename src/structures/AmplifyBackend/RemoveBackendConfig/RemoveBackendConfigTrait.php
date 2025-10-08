<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\RemoveBackendConfig;

trait RemoveBackendConfigTrait
{
    /**
     * @param RemoveBackendConfigRequest $args
     * @return RemoveBackendConfigResponse
     */
    public function removeBackendConfig(RemoveBackendConfigRequest $args)
    {
        $result = parent::removeBackendConfig($args->toArray());
        return new RemoveBackendConfigResponse($result->toArray());
    }
}
