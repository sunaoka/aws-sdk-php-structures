<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\SendManagedThingCommand;

trait SendManagedThingCommandTrait
{
    /**
     * @param SendManagedThingCommandRequest $args
     * @return SendManagedThingCommandResponse
     */
    public function sendManagedThingCommand(SendManagedThingCommandRequest $args)
    {
        $result = parent::sendManagedThingCommand($args->toArray());
        return new SendManagedThingCommandResponse($result->toArray());
    }
}
