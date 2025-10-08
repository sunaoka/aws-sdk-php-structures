<?php

namespace Sunaoka\Aws\Structures\Lightsail\StopGUISession;

trait StopGUISessionTrait
{
    /**
     * @param StopGUISessionRequest $args
     * @return StopGUISessionResponse
     */
    public function stopGUISession(StopGUISessionRequest $args)
    {
        $result = parent::stopGUISession($args->toArray());
        return new StopGUISessionResponse($result->toArray());
    }
}
