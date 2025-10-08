<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPoolDomain;

trait UpdateUserPoolDomainTrait
{
    /**
     * @param UpdateUserPoolDomainRequest $args
     * @return UpdateUserPoolDomainResponse
     */
    public function updateUserPoolDomain(UpdateUserPoolDomainRequest $args)
    {
        $result = parent::updateUserPoolDomain($args->toArray());
        return new UpdateUserPoolDomainResponse($result->toArray());
    }
}
