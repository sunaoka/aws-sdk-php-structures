<?php

namespace Sunaoka\Aws\Structures\Lightsail\StartGUISession;

trait StartGUISessionTrait
{
    /**
     * @param StartGUISessionRequest $args
     * @return StartGUISessionResponse
     */
    public function startGUISession(StartGUISessionRequest $args)
    {
        $result = parent::startGUISession($args->toArray());
        return new StartGUISessionResponse($result->toArray());
    }
}
