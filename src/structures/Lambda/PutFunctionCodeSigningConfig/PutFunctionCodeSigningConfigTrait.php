<?php

namespace Sunaoka\Aws\Structures\Lambda\PutFunctionCodeSigningConfig;

trait PutFunctionCodeSigningConfigTrait
{
    /**
     * @param PutFunctionCodeSigningConfigRequest $args
     * @return PutFunctionCodeSigningConfigResponse
     */
    public function putFunctionCodeSigningConfig(PutFunctionCodeSigningConfigRequest $args)
    {
        $result = parent::putFunctionCodeSigningConfig($args->toArray());
        return new PutFunctionCodeSigningConfigResponse($result->toArray());
    }
}
