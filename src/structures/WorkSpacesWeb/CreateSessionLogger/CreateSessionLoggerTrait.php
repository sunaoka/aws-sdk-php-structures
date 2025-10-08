<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateSessionLogger;

trait CreateSessionLoggerTrait
{
    /**
     * @param CreateSessionLoggerRequest $args
     * @return CreateSessionLoggerResponse
     */
    public function createSessionLogger(CreateSessionLoggerRequest $args)
    {
        $result = parent::createSessionLogger($args->toArray());
        return new CreateSessionLoggerResponse($result->toArray());
    }
}
