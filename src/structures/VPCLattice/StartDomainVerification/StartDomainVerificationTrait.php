<?php

namespace Sunaoka\Aws\Structures\VPCLattice\StartDomainVerification;

trait StartDomainVerificationTrait
{
    /**
     * @param StartDomainVerificationRequest $args
     * @return StartDomainVerificationResponse
     */
    public function startDomainVerification(StartDomainVerificationRequest $args)
    {
        $result = parent::startDomainVerification($args->toArray());
        return new StartDomainVerificationResponse($result->toArray());
    }
}
