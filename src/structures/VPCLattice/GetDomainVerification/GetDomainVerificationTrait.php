<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetDomainVerification;

trait GetDomainVerificationTrait
{
    /**
     * @param GetDomainVerificationRequest $args
     * @return GetDomainVerificationResponse
     */
    public function getDomainVerification(GetDomainVerificationRequest $args)
    {
        $result = parent::getDomainVerification($args->toArray());
        return new GetDomainVerificationResponse($result->toArray());
    }
}
