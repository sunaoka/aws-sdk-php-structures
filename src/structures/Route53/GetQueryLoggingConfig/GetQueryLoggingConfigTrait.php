<?php

namespace Sunaoka\Aws\Structures\Route53\GetQueryLoggingConfig;

trait GetQueryLoggingConfigTrait
{
    /**
     * @param GetQueryLoggingConfigRequest $args
     * @return GetQueryLoggingConfigResponse
     */
    public function getQueryLoggingConfig(GetQueryLoggingConfigRequest $args)
    {
        $result = parent::getQueryLoggingConfig($args->toArray());
        return new GetQueryLoggingConfigResponse($result->toArray());
    }
}
