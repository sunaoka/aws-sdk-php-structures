<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionState;

trait GetDurableExecutionStateTrait
{
    /**
     * @param GetDurableExecutionStateRequest $args
     * @return GetDurableExecutionStateResponse
     */
    public function getDurableExecutionState(GetDurableExecutionStateRequest $args)
    {
        $result = parent::getDurableExecutionState($args->toArray());
        return new GetDurableExecutionStateResponse($result->toArray());
    }
}
