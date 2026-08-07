<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamRoutingPolicyRegistration;

trait CreateIpamRoutingPolicyRegistrationTrait
{
    /**
     * @param CreateIpamRoutingPolicyRegistrationRequest $args
     * @return CreateIpamRoutingPolicyRegistrationResponse
     */
    public function createIpamRoutingPolicyRegistration(CreateIpamRoutingPolicyRegistrationRequest $args)
    {
        $result = parent::createIpamRoutingPolicyRegistration($args->toArray());
        return new CreateIpamRoutingPolicyRegistrationResponse($result->toArray());
    }
}
