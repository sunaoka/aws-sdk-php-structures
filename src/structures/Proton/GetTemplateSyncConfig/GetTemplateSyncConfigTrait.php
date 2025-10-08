<?php

namespace Sunaoka\Aws\Structures\Proton\GetTemplateSyncConfig;

trait GetTemplateSyncConfigTrait
{
    /**
     * @param GetTemplateSyncConfigRequest $args
     * @return GetTemplateSyncConfigResponse
     */
    public function getTemplateSyncConfig(GetTemplateSyncConfigRequest $args)
    {
        $result = parent::getTemplateSyncConfig($args->toArray());
        return new GetTemplateSyncConfigResponse($result->toArray());
    }
}
