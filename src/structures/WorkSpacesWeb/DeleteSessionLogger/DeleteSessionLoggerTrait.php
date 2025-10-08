<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DeleteSessionLogger;

trait DeleteSessionLoggerTrait
{
    /**
     * @param DeleteSessionLoggerRequest $args
     * @return DeleteSessionLoggerResponse
     */
    public function deleteSessionLogger(DeleteSessionLoggerRequest $args)
    {
        $result = parent::deleteSessionLogger($args->toArray());
        return new DeleteSessionLoggerResponse($result->toArray());
    }
}
