<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DeleteLifecycleHook;

trait DeleteLifecycleHookTrait
{
    /**
     * @param DeleteLifecycleHookRequest $args
     * @return DeleteLifecycleHookResponse
     */
    public function deleteLifecycleHook(DeleteLifecycleHookRequest $args)
    {
        $result = parent::deleteLifecycleHook($args->toArray());
        return new DeleteLifecycleHookResponse($result->toArray());
    }
}
