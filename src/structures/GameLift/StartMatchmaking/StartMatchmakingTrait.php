<?php

namespace Sunaoka\Aws\Structures\GameLift\StartMatchmaking;

trait StartMatchmakingTrait
{
    /**
     * @param StartMatchmakingRequest $args
     * @return StartMatchmakingResponse
     */
    public function startMatchmaking(StartMatchmakingRequest $args)
    {
        $result = parent::startMatchmaking($args->toArray());
        return new StartMatchmakingResponse($result->toArray());
    }
}
