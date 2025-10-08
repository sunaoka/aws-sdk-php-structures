<?php

namespace Sunaoka\Aws\Structures\Route53\CreateQueryLoggingConfig;

trait CreateQueryLoggingConfigTrait
{
    /**
     * @param CreateQueryLoggingConfigRequest $args
     * @return CreateQueryLoggingConfigResponse
     */
    public function createQueryLoggingConfig(CreateQueryLoggingConfigRequest $args)
    {
        $result = parent::createQueryLoggingConfig($args->toArray());
        return new CreateQueryLoggingConfigResponse($result->toArray());
    }
}
