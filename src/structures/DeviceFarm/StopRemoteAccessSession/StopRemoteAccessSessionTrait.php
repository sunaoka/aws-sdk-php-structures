<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\StopRemoteAccessSession;

trait StopRemoteAccessSessionTrait
{
    /**
     * @param StopRemoteAccessSessionRequest $args
     * @return StopRemoteAccessSessionResponse
     */
    public function stopRemoteAccessSession(StopRemoteAccessSessionRequest $args)
    {
        $result = parent::stopRemoteAccessSession($args->toArray());
        return new StopRemoteAccessSessionResponse($result->toArray());
    }
}
