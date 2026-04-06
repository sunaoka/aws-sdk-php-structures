<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DisassociateSessionLogger;

trait DisassociateSessionLoggerTrait
{
    /**
     * @param DisassociateSessionLoggerRequest $args
     * @return DisassociateSessionLoggerResponse
     */
    public function disassociateSessionLogger(DisassociateSessionLoggerRequest $args)
    {
        $result = parent::disassociateSessionLogger($args->toArray());
        return new DisassociateSessionLoggerResponse($result->toArray());
    }
}
