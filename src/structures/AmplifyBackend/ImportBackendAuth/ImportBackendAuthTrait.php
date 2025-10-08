<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\ImportBackendAuth;

trait ImportBackendAuthTrait
{
    /**
     * @param ImportBackendAuthRequest $args
     * @return ImportBackendAuthResponse
     */
    public function importBackendAuth(ImportBackendAuthRequest $args)
    {
        $result = parent::importBackendAuth($args->toArray());
        return new ImportBackendAuthResponse($result->toArray());
    }
}
