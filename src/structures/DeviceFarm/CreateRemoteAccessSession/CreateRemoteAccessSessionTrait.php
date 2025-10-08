<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateRemoteAccessSession;

trait CreateRemoteAccessSessionTrait
{
    /**
     * @param CreateRemoteAccessSessionRequest $args
     * @return CreateRemoteAccessSessionResponse
     */
    public function createRemoteAccessSession(CreateRemoteAccessSessionRequest $args)
    {
        $result = parent::createRemoteAccessSession($args->toArray());
        return new CreateRemoteAccessSessionResponse($result->toArray());
    }
}
