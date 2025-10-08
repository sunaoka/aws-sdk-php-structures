<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunctionCodeSigningConfig;

trait GetFunctionCodeSigningConfigTrait
{
    /**
     * @param GetFunctionCodeSigningConfigRequest $args
     * @return GetFunctionCodeSigningConfigResponse
     */
    public function getFunctionCodeSigningConfig(GetFunctionCodeSigningConfigRequest $args)
    {
        $result = parent::getFunctionCodeSigningConfig($args->toArray());
        return new GetFunctionCodeSigningConfigResponse($result->toArray());
    }
}
