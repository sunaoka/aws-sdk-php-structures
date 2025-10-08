<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctionsByCodeSigningConfig;

trait ListFunctionsByCodeSigningConfigTrait
{
    /**
     * @param ListFunctionsByCodeSigningConfigRequest $args
     * @return ListFunctionsByCodeSigningConfigResponse
     */
    public function listFunctionsByCodeSigningConfig(ListFunctionsByCodeSigningConfigRequest $args)
    {
        $result = parent::listFunctionsByCodeSigningConfig($args->toArray());
        return new ListFunctionsByCodeSigningConfigResponse($result->toArray());
    }
}
