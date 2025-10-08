<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunctionUrlConfig;

trait GetFunctionUrlConfigTrait
{
    /**
     * @param GetFunctionUrlConfigRequest $args
     * @return GetFunctionUrlConfigResponse
     */
    public function getFunctionUrlConfig(GetFunctionUrlConfigRequest $args)
    {
        $result = parent::getFunctionUrlConfig($args->toArray());
        return new GetFunctionUrlConfigResponse($result->toArray());
    }
}
