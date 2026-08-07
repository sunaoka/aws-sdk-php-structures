<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamRoutingPolicyRegistrations;

trait GetIpamRoutingPolicyRegistrationsTrait
{
    /**
     * @param GetIpamRoutingPolicyRegistrationsRequest $args
     * @return GetIpamRoutingPolicyRegistrationsResponse
     */
    public function getIpamRoutingPolicyRegistrations(GetIpamRoutingPolicyRegistrationsRequest $args)
    {
        $result = parent::getIpamRoutingPolicyRegistrations($args->toArray());
        return new GetIpamRoutingPolicyRegistrationsResponse($result->toArray());
    }
}
