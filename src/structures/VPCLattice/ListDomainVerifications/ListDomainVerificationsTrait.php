<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListDomainVerifications;

trait ListDomainVerificationsTrait
{
    /**
     * @param ListDomainVerificationsRequest $args
     * @return ListDomainVerificationsResponse
     */
    public function listDomainVerifications(ListDomainVerificationsRequest $args)
    {
        $result = parent::listDomainVerifications($args->toArray());
        return new ListDomainVerificationsResponse($result->toArray());
    }
}
