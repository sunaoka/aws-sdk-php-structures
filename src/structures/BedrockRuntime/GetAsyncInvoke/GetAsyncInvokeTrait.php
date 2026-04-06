<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\GetAsyncInvoke;

trait GetAsyncInvokeTrait
{
    /**
     * @param GetAsyncInvokeRequest $args
     * @return GetAsyncInvokeResponse
     */
    public function getAsyncInvoke(GetAsyncInvokeRequest $args)
    {
        $result = parent::getAsyncInvoke($args->toArray());
        return new GetAsyncInvokeResponse($result->toArray());
    }
}
