<?php

namespace Sunaoka\Aws\Structures\Ses\VerifyDomainIdentity;

trait VerifyDomainIdentityTrait
{
    /**
     * @param VerifyDomainIdentityRequest $args
     * @return VerifyDomainIdentityResponse
     */
    public function verifyDomainIdentity(VerifyDomainIdentityRequest $args)
    {
        $result = parent::verifyDomainIdentity($args->toArray());
        return new VerifyDomainIdentityResponse($result->toArray());
    }
}
