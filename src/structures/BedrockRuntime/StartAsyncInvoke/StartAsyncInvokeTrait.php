<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\StartAsyncInvoke;

trait StartAsyncInvokeTrait
{
    /**
     * @param StartAsyncInvokeRequest $args
     * @return StartAsyncInvokeResponse
     */
    public function startAsyncInvoke(StartAsyncInvokeRequest $args)
    {
        $result = parent::startAsyncInvoke($args->toArray());
        return new StartAsyncInvokeResponse($result->toArray());
    }
}
