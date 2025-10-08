<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteUserPoolDomain;

trait DeleteUserPoolDomainTrait
{
    /**
     * @param DeleteUserPoolDomainRequest $args
     * @return DeleteUserPoolDomainResponse
     */
    public function deleteUserPoolDomain(DeleteUserPoolDomainRequest $args)
    {
        $result = parent::deleteUserPoolDomain($args->toArray());
        return new DeleteUserPoolDomainResponse($result->toArray());
    }
}
