<?php

namespace Sunaoka\Aws\Structures\Athena\TerminateSession;

trait TerminateSessionTrait
{
    /**
     * @param TerminateSessionRequest $args
     * @return TerminateSessionResponse
     */
    public function terminateSession(TerminateSessionRequest $args)
    {
        $result = parent::terminateSession($args->toArray());
        return new TerminateSessionResponse($result->toArray());
    }
}
