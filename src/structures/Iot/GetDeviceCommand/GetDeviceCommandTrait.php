<?php

namespace Sunaoka\Aws\Structures\Iot\GetDeviceCommand;

trait GetDeviceCommandTrait
{
    /**
     * @param GetDeviceCommandRequest $args
     * @return GetDeviceCommandResponse
     */
    public function getDeviceCommand(GetDeviceCommandRequest $args)
    {
        $result = parent::getDeviceCommand($args->toArray());
        return new GetDeviceCommandResponse($result->toArray());
    }
}
