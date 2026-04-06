<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ListAsyncInvokes;

trait ListAsyncInvokesTrait
{
    /**
     * @param ListAsyncInvokesRequest $args
     * @return ListAsyncInvokesResponse
     */
    public function listAsyncInvokes(ListAsyncInvokesRequest $args)
    {
        $result = parent::listAsyncInvokes($args->toArray());
        return new ListAsyncInvokesResponse($result->toArray());
    }
}
