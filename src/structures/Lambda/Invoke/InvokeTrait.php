<?php

namespace Sunaoka\Aws\Structures\Lambda\Invoke;

trait InvokeTrait
{
    /**
     * @param InvokeRequest $args
     * @return InvokeResponse
     */
    public function invoke(InvokeRequest $args)
    {
        $result = parent::invoke($args->toArray());
        return new InvokeResponse($result->toArray());
    }
}
