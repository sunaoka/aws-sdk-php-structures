<?php

namespace Sunaoka\Aws\Structures\Iot\CreateCommand;

trait CreateCommandTrait
{
    /**
     * @param CreateCommandRequest $args
     * @return CreateCommandResponse
     */
    public function createCommand(CreateCommandRequest $args)
    {
        $result = parent::createCommand($args->toArray());
        return new CreateCommandResponse($result->toArray());
    }
}
