<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\StopDevEnvironmentSession;

trait StopDevEnvironmentSessionTrait
{
    /**
     * @param StopDevEnvironmentSessionRequest $args
     * @return StopDevEnvironmentSessionResponse
     */
    public function stopDevEnvironmentSession(StopDevEnvironmentSessionRequest $args)
    {
        $result = parent::stopDevEnvironmentSession($args->toArray());
        return new StopDevEnvironmentSessionResponse($result->toArray());
    }
}
