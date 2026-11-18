<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteDurableExecution;

trait DeleteDurableExecutionTrait
{
    /**
     * @param DeleteDurableExecutionRequest $args
     * @return DeleteDurableExecutionResponse
     */
    public function deleteDurableExecution(DeleteDurableExecutionRequest $args)
    {
        $result = parent::deleteDurableExecution($args->toArray());
        return new DeleteDurableExecutionResponse($result->toArray());
    }
}
