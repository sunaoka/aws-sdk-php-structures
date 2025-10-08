<?php

namespace Sunaoka\Aws\Structures\Athena\StartSession;

trait StartSessionTrait
{
    /**
     * @param StartSessionRequest $args
     * @return StartSessionResponse
     */
    public function startSession(StartSessionRequest $args)
    {
        $result = parent::startSession($args->toArray());
        return new StartSessionResponse($result->toArray());
    }
}
