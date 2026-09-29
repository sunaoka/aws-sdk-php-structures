<?php

namespace Sunaoka\Aws\Structures\Ec2\GetClientVpnEndpointAuthorizationPolicy;

trait GetClientVpnEndpointAuthorizationPolicyTrait
{
    /**
     * @param GetClientVpnEndpointAuthorizationPolicyRequest $args
     * @return GetClientVpnEndpointAuthorizationPolicyResponse
     */
    public function getClientVpnEndpointAuthorizationPolicy(GetClientVpnEndpointAuthorizationPolicyRequest $args)
    {
        $result = parent::getClientVpnEndpointAuthorizationPolicy($args->toArray());
        return new GetClientVpnEndpointAuthorizationPolicyResponse($result->toArray());
    }
}
