<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateCommand;

trait UpdateCommandTrait
{
    /**
     * @param UpdateCommandRequest $args
     * @return UpdateCommandResponse
     */
    public function updateCommand(UpdateCommandRequest $args)
    {
        $result = parent::updateCommand($args->toArray());
        return new UpdateCommandResponse($result->toArray());
    }
}
