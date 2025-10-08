<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\DeleteRemoteAccessSession;

trait DeleteRemoteAccessSessionTrait
{
    /**
     * @param DeleteRemoteAccessSessionRequest $args
     * @return DeleteRemoteAccessSessionResponse
     */
    public function deleteRemoteAccessSession(DeleteRemoteAccessSessionRequest $args)
    {
        $result = parent::deleteRemoteAccessSession($args->toArray());
        return new DeleteRemoteAccessSessionResponse($result->toArray());
    }
}
