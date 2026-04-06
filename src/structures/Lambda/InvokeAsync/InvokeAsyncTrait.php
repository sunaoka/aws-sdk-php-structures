<?php

namespace Sunaoka\Aws\Structures\Lambda\InvokeAsync;

trait InvokeAsyncTrait
{
    /**
     * @param InvokeAsyncRequest $args
     * @return InvokeAsyncResponse
     */
    public function invokeAsync(InvokeAsyncRequest $args)
    {
        $result = parent::invokeAsync($args->toArray());
        return new InvokeAsyncResponse($result->toArray());
    }
}
