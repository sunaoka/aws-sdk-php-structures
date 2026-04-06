<?php

namespace Sunaoka\Aws\Structures\QApps\StartQAppSession;

trait StartQAppSessionTrait
{
    /**
     * @param StartQAppSessionRequest $args
     * @return StartQAppSessionResponse
     */
    public function startQAppSession(StartQAppSessionRequest $args)
    {
        $result = parent::startQAppSession($args->toArray());
        return new StartQAppSessionResponse($result->toArray());
    }
}
