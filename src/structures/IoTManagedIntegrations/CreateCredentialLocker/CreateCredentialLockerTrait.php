<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateCredentialLocker;

trait CreateCredentialLockerTrait
{
    /**
     * @param CreateCredentialLockerRequest $args
     * @return CreateCredentialLockerResponse
     */
    public function createCredentialLocker(CreateCredentialLockerRequest $args)
    {
        $result = parent::createCredentialLocker($args->toArray());
        return new CreateCredentialLockerResponse($result->toArray());
    }
}
