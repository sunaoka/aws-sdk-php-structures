<?php

namespace Sunaoka\Aws\Structures\GameLift\GetPlayerConnectionDetails;

trait GetPlayerConnectionDetailsTrait
{
    /**
     * @param GetPlayerConnectionDetailsRequest $args
     * @return GetPlayerConnectionDetailsResponse
     */
    public function getPlayerConnectionDetails(GetPlayerConnectionDetailsRequest $args)
    {
        $result = parent::getPlayerConnectionDetails($args->toArray());
        return new GetPlayerConnectionDetailsResponse($result->toArray());
    }
}
