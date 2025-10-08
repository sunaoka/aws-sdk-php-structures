<?php

namespace Sunaoka\Aws\Structures\Sfn\ListStateMachines;

trait ListStateMachinesTrait
{
    /**
     * @param ListStateMachinesRequest $args
     * @return ListStateMachinesResponse
     */
    public function listStateMachines(ListStateMachinesRequest $args)
    {
        $result = parent::listStateMachines($args->toArray());
        return new ListStateMachinesResponse($result->toArray());
    }
}
