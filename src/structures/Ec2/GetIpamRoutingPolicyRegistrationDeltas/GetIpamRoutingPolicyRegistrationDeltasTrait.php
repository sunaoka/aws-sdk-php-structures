<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamRoutingPolicyRegistrationDeltas;

trait GetIpamRoutingPolicyRegistrationDeltasTrait
{
    /**
     * @param GetIpamRoutingPolicyRegistrationDeltasRequest $args
     * @return GetIpamRoutingPolicyRegistrationDeltasResponse
     */
    public function getIpamRoutingPolicyRegistrationDeltas(GetIpamRoutingPolicyRegistrationDeltasRequest $args)
    {
        $result = parent::getIpamRoutingPolicyRegistrationDeltas($args->toArray());
        return new GetIpamRoutingPolicyRegistrationDeltasResponse($result->toArray());
    }
}
