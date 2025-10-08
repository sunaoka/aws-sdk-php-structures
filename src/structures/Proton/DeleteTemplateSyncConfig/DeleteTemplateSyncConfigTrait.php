<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteTemplateSyncConfig;

trait DeleteTemplateSyncConfigTrait
{
    /**
     * @param DeleteTemplateSyncConfigRequest $args
     * @return DeleteTemplateSyncConfigResponse
     */
    public function deleteTemplateSyncConfig(DeleteTemplateSyncConfigRequest $args)
    {
        $result = parent::deleteTemplateSyncConfig($args->toArray());
        return new DeleteTemplateSyncConfigResponse($result->toArray());
    }
}
