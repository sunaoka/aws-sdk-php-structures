<?php

namespace Sunaoka\Aws\Structures\Route53\DeleteQueryLoggingConfig;

trait DeleteQueryLoggingConfigTrait
{
    /**
     * @param DeleteQueryLoggingConfigRequest $args
     * @return DeleteQueryLoggingConfigResponse
     */
    public function deleteQueryLoggingConfig(DeleteQueryLoggingConfigRequest $args)
    {
        $result = parent::deleteQueryLoggingConfig($args->toArray());
        return new DeleteQueryLoggingConfigResponse($result->toArray());
    }
}
