<?php

namespace Sunaoka\Aws\Structures\VoiceID\EvaluateSession;

trait EvaluateSessionTrait
{
    /**
     * @param EvaluateSessionRequest $args
     * @return EvaluateSessionResponse
     */
    public function evaluateSession(EvaluateSessionRequest $args)
    {
        $result = parent::evaluateSession($args->toArray());
        return new EvaluateSessionResponse($result->toArray());
    }
}
