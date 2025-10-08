<?php

namespace Sunaoka\Aws\Structures\Braket\CancelQuantumTask;

trait CancelQuantumTaskTrait
{
    /**
     * @param CancelQuantumTaskRequest $args
     * @return CancelQuantumTaskResponse
     */
    public function cancelQuantumTask(CancelQuantumTaskRequest $args)
    {
        $result = parent::cancelQuantumTask($args->toArray());
        return new CancelQuantumTaskResponse($result->toArray());
    }
}
