<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\StartDevEnvironmentSession;

trait StartDevEnvironmentSessionTrait
{
    /**
     * @param StartDevEnvironmentSessionRequest $args
     * @return StartDevEnvironmentSessionResponse
     */
    public function startDevEnvironmentSession(StartDevEnvironmentSessionRequest $args)
    {
        $result = parent::startDevEnvironmentSession($args->toArray());
        return new StartDevEnvironmentSessionResponse($result->toArray());
    }
}
