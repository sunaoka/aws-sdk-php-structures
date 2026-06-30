<?php

namespace Sunaoka\Aws\Structures\Acm\GetAcmeExternalAccountBindingCredentials;

trait GetAcmeExternalAccountBindingCredentialsTrait
{
    /**
     * @param GetAcmeExternalAccountBindingCredentialsRequest $args
     * @return GetAcmeExternalAccountBindingCredentialsResponse
     */
    public function getAcmeExternalAccountBindingCredentials(GetAcmeExternalAccountBindingCredentialsRequest $args)
    {
        $result = parent::getAcmeExternalAccountBindingCredentials($args->toArray());
        return new GetAcmeExternalAccountBindingCredentialsResponse($result->toArray());
    }
}
