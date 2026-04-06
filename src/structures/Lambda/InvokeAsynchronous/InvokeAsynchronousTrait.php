<?php

namespace Sunaoka\Aws\Structures\Lambda\InvokeAsynchronous;

trait InvokeAsynchronousTrait
{
    /**
     * @param InvokeAsynchronousRequest $args
     * @return InvokeAsynchronousResponse
     */
    public function invokeAsynchronous(InvokeAsynchronousRequest $args)
    {
        $result = parent::invokeAsynchronous($args->toArray());
        return new InvokeAsynchronousResponse($result->toArray());
    }
}
