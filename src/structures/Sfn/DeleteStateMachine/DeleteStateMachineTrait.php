<?php

namespace Sunaoka\Aws\Structures\Sfn\DeleteStateMachine;

trait DeleteStateMachineTrait
{
    /**
     * @param DeleteStateMachineRequest $args
     * @return DeleteStateMachineResponse
     */
    public function deleteStateMachine(DeleteStateMachineRequest $args)
    {
        $result = parent::deleteStateMachine($args->toArray());
        return new DeleteStateMachineResponse($result->toArray());
    }
}
