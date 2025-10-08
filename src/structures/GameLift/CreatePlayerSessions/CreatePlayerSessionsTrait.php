<?php

namespace Sunaoka\Aws\Structures\GameLift\CreatePlayerSessions;

trait CreatePlayerSessionsTrait
{
    /**
     * @param CreatePlayerSessionsRequest $args
     * @return CreatePlayerSessionsResponse
     */
    public function createPlayerSessions(CreatePlayerSessionsRequest $args)
    {
        $result = parent::createPlayerSessions($args->toArray());
        return new CreatePlayerSessionsResponse($result->toArray());
    }
}
