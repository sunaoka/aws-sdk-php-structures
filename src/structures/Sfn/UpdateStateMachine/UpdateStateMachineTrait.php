<?php

namespace Sunaoka\Aws\Structures\Sfn\UpdateStateMachine;

trait UpdateStateMachineTrait
{
    /**
     * @param UpdateStateMachineRequest $args
     * @return UpdateStateMachineResponse
     */
    public function updateStateMachine(UpdateStateMachineRequest $args)
    {
        $result = parent::updateStateMachine($args->toArray());
        return new UpdateStateMachineResponse($result->toArray());
    }
}
