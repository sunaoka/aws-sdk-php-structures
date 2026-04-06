<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteDomainVerification;

trait DeleteDomainVerificationTrait
{
    /**
     * @param DeleteDomainVerificationRequest $args
     * @return DeleteDomainVerificationResponse
     */
    public function deleteDomainVerification(DeleteDomainVerificationRequest $args)
    {
        $result = parent::deleteDomainVerification($args->toArray());
        return new DeleteDomainVerificationResponse($result->toArray());
    }
}
