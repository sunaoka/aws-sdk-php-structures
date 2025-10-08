<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand;

trait SendCommandTrait
{
    /**
     * @param SendCommandRequest $args
     * @return SendCommandResponse
     */
    public function sendCommand(SendCommandRequest $args)
    {
        $result = parent::sendCommand($args->toArray());
        return new SendCommandResponse($result->toArray());
    }
}
