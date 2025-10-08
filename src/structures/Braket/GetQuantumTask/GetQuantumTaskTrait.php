<?php

namespace Sunaoka\Aws\Structures\Braket\GetQuantumTask;

trait GetQuantumTaskTrait
{
    /**
     * @param GetQuantumTaskRequest $args
     * @return GetQuantumTaskResponse
     */
    public function getQuantumTask(GetQuantumTaskRequest $args)
    {
        $result = parent::getQuantumTask($args->toArray());
        return new GetQuantumTaskResponse($result->toArray());
    }
}
