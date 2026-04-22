<?php

namespace Sunaoka\Aws\Structures\EMRServerless\TerminateSession;

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
