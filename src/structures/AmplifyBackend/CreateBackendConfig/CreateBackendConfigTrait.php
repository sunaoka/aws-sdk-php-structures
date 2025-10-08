<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendConfig;

trait CreateBackendConfigTrait
{
    /**
     * @param CreateBackendConfigRequest $args
     * @return CreateBackendConfigResponse
     */
    public function createBackendConfig(CreateBackendConfigRequest $args)
    {
        $result = parent::createBackendConfig($args->toArray());
        return new CreateBackendConfigResponse($result->toArray());
    }
}
