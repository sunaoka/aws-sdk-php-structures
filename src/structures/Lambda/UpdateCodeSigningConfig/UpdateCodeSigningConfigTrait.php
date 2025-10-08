<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateCodeSigningConfig;

trait UpdateCodeSigningConfigTrait
{
    /**
     * @param UpdateCodeSigningConfigRequest $args
     * @return UpdateCodeSigningConfigResponse
     */
    public function updateCodeSigningConfig(UpdateCodeSigningConfigRequest $args)
    {
        $result = parent::updateCodeSigningConfig($args->toArray());
        return new UpdateCodeSigningConfigResponse($result->toArray());
    }
}
