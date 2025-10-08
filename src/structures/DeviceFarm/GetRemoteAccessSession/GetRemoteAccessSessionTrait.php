<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetRemoteAccessSession;

trait GetRemoteAccessSessionTrait
{
    /**
     * @param GetRemoteAccessSessionRequest $args
     * @return GetRemoteAccessSessionResponse
     */
    public function getRemoteAccessSession(GetRemoteAccessSessionRequest $args)
    {
        $result = parent::getRemoteAccessSession($args->toArray());
        return new GetRemoteAccessSessionResponse($result->toArray());
    }
}
