<?php

namespace Sunaoka\Aws\Structures\GameLift\TerminateGameSession;

trait TerminateGameSessionTrait
{
    /**
     * @param TerminateGameSessionRequest $args
     * @return TerminateGameSessionResponse
     */
    public function terminateGameSession(TerminateGameSessionRequest $args)
    {
        $result = parent::terminateGameSession($args->toArray());
        return new TerminateGameSessionResponse($result->toArray());
    }
}
