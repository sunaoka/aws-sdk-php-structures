<?php

namespace Sunaoka\Aws\Structures\Proton\CreateTemplateSyncConfig;

trait CreateTemplateSyncConfigTrait
{
    /**
     * @param CreateTemplateSyncConfigRequest $args
     * @return CreateTemplateSyncConfigResponse
     */
    public function createTemplateSyncConfig(CreateTemplateSyncConfigRequest $args)
    {
        $result = parent::createTemplateSyncConfig($args->toArray());
        return new CreateTemplateSyncConfigResponse($result->toArray());
    }
}
