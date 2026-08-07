<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamRoutingPolicyRegistration;

trait DeleteIpamRoutingPolicyRegistrationTrait
{
    /**
     * @param DeleteIpamRoutingPolicyRegistrationRequest $args
     * @return DeleteIpamRoutingPolicyRegistrationResponse
     */
    public function deleteIpamRoutingPolicyRegistration(DeleteIpamRoutingPolicyRegistrationRequest $args)
    {
        $result = parent::deleteIpamRoutingPolicyRegistration($args->toArray());
        return new DeleteIpamRoutingPolicyRegistrationResponse($result->toArray());
    }
}
