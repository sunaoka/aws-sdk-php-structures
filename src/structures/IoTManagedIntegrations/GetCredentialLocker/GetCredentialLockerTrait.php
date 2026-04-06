<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetCredentialLocker;

trait GetCredentialLockerTrait
{
    /**
     * @param GetCredentialLockerRequest $args
     * @return GetCredentialLockerResponse
     */
    public function getCredentialLocker(GetCredentialLockerRequest $args)
    {
        $result = parent::getCredentialLocker($args->toArray());
        return new GetCredentialLockerResponse($result->toArray());
    }
}
