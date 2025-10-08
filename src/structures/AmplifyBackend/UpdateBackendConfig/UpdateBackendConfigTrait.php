<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendConfig;

trait UpdateBackendConfigTrait
{
    /**
     * @param UpdateBackendConfigRequest $args
     * @return UpdateBackendConfigResponse
     */
    public function updateBackendConfig(UpdateBackendConfigRequest $args)
    {
        $result = parent::updateBackendConfig($args->toArray());
        return new UpdateBackendConfigResponse($result->toArray());
    }
}
