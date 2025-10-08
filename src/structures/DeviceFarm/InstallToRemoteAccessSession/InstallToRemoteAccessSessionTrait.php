<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\InstallToRemoteAccessSession;

trait InstallToRemoteAccessSessionTrait
{
    /**
     * @param InstallToRemoteAccessSessionRequest $args
     * @return InstallToRemoteAccessSessionResponse
     */
    public function installToRemoteAccessSession(InstallToRemoteAccessSessionRequest $args)
    {
        $result = parent::installToRemoteAccessSession($args->toArray());
        return new InstallToRemoteAccessSessionResponse($result->toArray());
    }
}
