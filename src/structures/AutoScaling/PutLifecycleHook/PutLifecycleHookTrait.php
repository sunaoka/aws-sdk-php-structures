<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutLifecycleHook;

trait PutLifecycleHookTrait
{
    /**
     * @param PutLifecycleHookRequest $args
     * @return PutLifecycleHookResponse
     */
    public function putLifecycleHook(PutLifecycleHookRequest $args)
    {
        $result = parent::putLifecycleHook($args->toArray());
        return new PutLifecycleHookResponse($result->toArray());
    }
}
