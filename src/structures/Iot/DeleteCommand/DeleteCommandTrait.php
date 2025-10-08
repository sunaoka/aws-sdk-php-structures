<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteCommand;

trait DeleteCommandTrait
{
    /**
     * @param DeleteCommandRequest $args
     * @return DeleteCommandResponse
     */
    public function deleteCommand(DeleteCommandRequest $args)
    {
        $result = parent::deleteCommand($args->toArray());
        return new DeleteCommandResponse($result->toArray());
    }
}
