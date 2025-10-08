<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateTemplateSyncConfig;

trait UpdateTemplateSyncConfigTrait
{
    /**
     * @param UpdateTemplateSyncConfigRequest $args
     * @return UpdateTemplateSyncConfigResponse
     */
    public function updateTemplateSyncConfig(UpdateTemplateSyncConfigRequest $args)
    {
        $result = parent::updateTemplateSyncConfig($args->toArray());
        return new UpdateTemplateSyncConfigResponse($result->toArray());
    }
}
