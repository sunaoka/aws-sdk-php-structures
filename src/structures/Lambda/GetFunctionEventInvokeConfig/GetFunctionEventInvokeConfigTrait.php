<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunctionEventInvokeConfig;

trait GetFunctionEventInvokeConfigTrait
{
    /**
     * @param GetFunctionEventInvokeConfigRequest $args
     * @return GetFunctionEventInvokeConfigResponse
     */
    public function getFunctionEventInvokeConfig(GetFunctionEventInvokeConfigRequest $args)
    {
        $result = parent::getFunctionEventInvokeConfig($args->toArray());
        return new GetFunctionEventInvokeConfigResponse($result->toArray());
    }
}
