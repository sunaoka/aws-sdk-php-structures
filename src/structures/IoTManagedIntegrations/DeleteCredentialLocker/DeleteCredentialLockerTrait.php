<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteCredentialLocker;

trait DeleteCredentialLockerTrait
{
    /**
     * @param DeleteCredentialLockerRequest $args
     * @return void
     */
    public function deleteCredentialLocker(DeleteCredentialLockerRequest $args)
    {
        parent::deleteCredentialLocker($args->toArray());
    }
}
