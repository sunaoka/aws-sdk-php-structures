<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamRoutingPolicyRegistration;

trait ModifyIpamRoutingPolicyRegistrationTrait
{
    /**
     * @param ModifyIpamRoutingPolicyRegistrationRequest $args
     * @return ModifyIpamRoutingPolicyRegistrationResponse
     */
    public function modifyIpamRoutingPolicyRegistration(ModifyIpamRoutingPolicyRegistrationRequest $args)
    {
        $result = parent::modifyIpamRoutingPolicyRegistration($args->toArray());
        return new ModifyIpamRoutingPolicyRegistrationResponse($result->toArray());
    }
}
