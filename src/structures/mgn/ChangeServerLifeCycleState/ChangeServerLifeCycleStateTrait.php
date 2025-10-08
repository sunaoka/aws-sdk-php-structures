<?php

namespace Sunaoka\Aws\Structures\mgn\ChangeServerLifeCycleState;

trait ChangeServerLifeCycleStateTrait
{
    /**
     * @param ChangeServerLifeCycleStateRequest $args
     * @return ChangeServerLifeCycleStateResponse
     */
    public function changeServerLifeCycleState(ChangeServerLifeCycleStateRequest $args)
    {
        $result = parent::changeServerLifeCycleState($args->toArray());
        return new ChangeServerLifeCycleStateResponse($result->toArray());
    }
}
