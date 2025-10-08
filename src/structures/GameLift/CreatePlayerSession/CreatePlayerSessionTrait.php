<?php

namespace Sunaoka\Aws\Structures\GameLift\CreatePlayerSession;

trait CreatePlayerSessionTrait
{
    /**
     * @param CreatePlayerSessionRequest $args
     * @return CreatePlayerSessionResponse
     */
    public function createPlayerSession(CreatePlayerSessionRequest $args)
    {
        $result = parent::createPlayerSession($args->toArray());
        return new CreatePlayerSessionResponse($result->toArray());
    }
}
