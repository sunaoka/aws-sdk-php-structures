<?php

namespace Sunaoka\Aws\Structures\GameLift\StopMatchmaking;

trait StopMatchmakingTrait
{
    /**
     * @param StopMatchmakingRequest $args
     * @return StopMatchmakingResponse
     */
    public function stopMatchmaking(StopMatchmakingRequest $args)
    {
        $result = parent::stopMatchmaking($args->toArray());
        return new StopMatchmakingResponse($result->toArray());
    }
}
