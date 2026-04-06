<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetPlayerConnectionStatus;

trait GetPlayerConnectionStatusTrait
{
    /**
     * @param GetPlayerConnectionStatusRequest $args
     * @return GetPlayerConnectionStatusResponse
     */
    public function getPlayerConnectionStatus(GetPlayerConnectionStatusRequest $args)
    {
        $result = parent::getPlayerConnectionStatus($args->toArray());
        return new GetPlayerConnectionStatusResponse($result->toArray());
    }
}
