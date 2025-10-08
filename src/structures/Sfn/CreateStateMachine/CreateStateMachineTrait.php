<?php

namespace Sunaoka\Aws\Structures\Sfn\CreateStateMachine;

trait CreateStateMachineTrait
{
    /**
     * @param CreateStateMachineRequest $args
     * @return CreateStateMachineResponse
     */
    public function createStateMachine(CreateStateMachineRequest $args)
    {
        $result = parent::createStateMachine($args->toArray());
        return new CreateStateMachineResponse($result->toArray());
    }
}
