<?php

namespace Sunaoka\Aws\Structures\Lambda\PutFunctionEventInvokeConfig;

trait PutFunctionEventInvokeConfigTrait
{
    /**
     * @param PutFunctionEventInvokeConfigRequest $args
     * @return PutFunctionEventInvokeConfigResponse
     */
    public function putFunctionEventInvokeConfig(PutFunctionEventInvokeConfigRequest $args)
    {
        $result = parent::putFunctionEventInvokeConfig($args->toArray());
        return new PutFunctionEventInvokeConfigResponse($result->toArray());
    }
}
