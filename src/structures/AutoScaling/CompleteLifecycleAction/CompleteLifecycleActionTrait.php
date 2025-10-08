<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CompleteLifecycleAction;

trait CompleteLifecycleActionTrait
{
    /**
     * @param CompleteLifecycleActionRequest $args
     * @return CompleteLifecycleActionResponse
     */
    public function completeLifecycleAction(CompleteLifecycleActionRequest $args)
    {
        $result = parent::completeLifecycleAction($args->toArray());
        return new CompleteLifecycleActionResponse($result->toArray());
    }
}
