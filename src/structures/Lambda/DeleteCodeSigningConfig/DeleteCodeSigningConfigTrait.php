<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteCodeSigningConfig;

trait DeleteCodeSigningConfigTrait
{
    /**
     * @param DeleteCodeSigningConfigRequest $args
     * @return DeleteCodeSigningConfigResponse
     */
    public function deleteCodeSigningConfig(DeleteCodeSigningConfigRequest $args)
    {
        $result = parent::deleteCodeSigningConfig($args->toArray());
        return new DeleteCodeSigningConfigResponse($result->toArray());
    }
}
