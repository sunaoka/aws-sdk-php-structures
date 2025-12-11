<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVpcResourcesBlockingEncryptionEnforcement;

trait GetVpcResourcesBlockingEncryptionEnforcementTrait
{
    /**
     * @param GetVpcResourcesBlockingEncryptionEnforcementRequest $args
     * @return GetVpcResourcesBlockingEncryptionEnforcementResponse
     */
    public function getVpcResourcesBlockingEncryptionEnforcement(GetVpcResourcesBlockingEncryptionEnforcementRequest $args)
    {
        $result = parent::getVpcResourcesBlockingEncryptionEnforcement($args->toArray());
        return new GetVpcResourcesBlockingEncryptionEnforcementResponse($result->toArray());
    }
}
