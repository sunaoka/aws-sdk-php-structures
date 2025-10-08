<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteCommandExecution;

trait DeleteCommandExecutionTrait
{
    /**
     * @param DeleteCommandExecutionRequest $args
     * @return DeleteCommandExecutionResponse
     */
    public function deleteCommandExecution(DeleteCommandExecutionRequest $args)
    {
        $result = parent::deleteCommandExecution($args->toArray());
        return new DeleteCommandExecutionResponse($result->toArray());
    }
}
