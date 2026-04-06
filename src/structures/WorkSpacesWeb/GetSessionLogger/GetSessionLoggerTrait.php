<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetSessionLogger;

trait GetSessionLoggerTrait
{
    /**
     * @param GetSessionLoggerRequest $args
     * @return GetSessionLoggerResponse
     */
    public function getSessionLogger(GetSessionLoggerRequest $args)
    {
        $result = parent::getSessionLogger($args->toArray());
        return new GetSessionLoggerResponse($result->toArray());
    }
}
