<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartMulticastGroupSession;

trait StartMulticastGroupSessionTrait
{
    /**
     * @param StartMulticastGroupSessionRequest $args
     * @return StartMulticastGroupSessionResponse
     */
    public function startMulticastGroupSession(StartMulticastGroupSessionRequest $args)
    {
        $result = parent::startMulticastGroupSession($args->toArray());
        return new StartMulticastGroupSessionResponse($result->toArray());
    }
}
