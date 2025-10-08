<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPoolDomain;

trait CreateUserPoolDomainTrait
{
    /**
     * @param CreateUserPoolDomainRequest $args
     * @return CreateUserPoolDomainResponse
     */
    public function createUserPoolDomain(CreateUserPoolDomainRequest $args)
    {
        $result = parent::createUserPoolDomain($args->toArray());
        return new CreateUserPoolDomainResponse($result->toArray());
    }
}
