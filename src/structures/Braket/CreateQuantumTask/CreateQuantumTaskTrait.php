<?php

namespace Sunaoka\Aws\Structures\Braket\CreateQuantumTask;

trait CreateQuantumTaskTrait
{
    /**
     * @param CreateQuantumTaskRequest $args
     * @return CreateQuantumTaskResponse
     */
    public function createQuantumTask(CreateQuantumTaskRequest $args)
    {
        $result = parent::createQuantumTask($args->toArray());
        return new CreateQuantumTaskResponse($result->toArray());
    }
}
