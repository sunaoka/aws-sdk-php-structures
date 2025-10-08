<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListCredentialLockers;

trait ListCredentialLockersTrait
{
    /**
     * @param ListCredentialLockersRequest $args
     * @return ListCredentialLockersResponse
     */
    public function listCredentialLockers(ListCredentialLockersRequest $args)
    {
        $result = parent::listCredentialLockers($args->toArray());
        return new ListCredentialLockersResponse($result->toArray());
    }
}
