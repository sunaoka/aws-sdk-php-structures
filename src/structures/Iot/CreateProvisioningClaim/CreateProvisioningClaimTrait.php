<?php

namespace Sunaoka\Aws\Structures\Iot\CreateProvisioningClaim;

trait CreateProvisioningClaimTrait
{
    /**
     * @param CreateProvisioningClaimRequest $args
     * @return CreateProvisioningClaimResponse
     */
    public function createProvisioningClaim(CreateProvisioningClaimRequest $args)
    {
        $result = parent::createProvisioningClaim($args->toArray());
        return new CreateProvisioningClaimResponse($result->toArray());
    }
}
