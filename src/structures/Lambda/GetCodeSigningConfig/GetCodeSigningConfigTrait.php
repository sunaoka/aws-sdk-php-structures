<?php

namespace Sunaoka\Aws\Structures\Lambda\GetCodeSigningConfig;

trait GetCodeSigningConfigTrait
{
    /**
     * @param GetCodeSigningConfigRequest $args
     * @return GetCodeSigningConfigResponse
     */
    public function getCodeSigningConfig(GetCodeSigningConfigRequest $args)
    {
        $result = parent::getCodeSigningConfig($args->toArray());
        return new GetCodeSigningConfigResponse($result->toArray());
    }
}
