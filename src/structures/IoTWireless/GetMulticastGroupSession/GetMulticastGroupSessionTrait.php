<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMulticastGroupSession;

trait GetMulticastGroupSessionTrait
{
    /**
     * @param GetMulticastGroupSessionRequest $args
     * @return GetMulticastGroupSessionResponse
     */
    public function getMulticastGroupSession(GetMulticastGroupSessionRequest $args)
    {
        $result = parent::getMulticastGroupSession($args->toArray());
        return new GetMulticastGroupSessionResponse($result->toArray());
    }
}
