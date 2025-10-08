<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateSessionLogger;

trait AssociateSessionLoggerTrait
{
    /**
     * @param AssociateSessionLoggerRequest $args
     * @return AssociateSessionLoggerResponse
     */
    public function associateSessionLogger(AssociateSessionLoggerRequest $args)
    {
        $result = parent::associateSessionLogger($args->toArray());
        return new AssociateSessionLoggerResponse($result->toArray());
    }
}
