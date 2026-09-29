<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyClientVpnEndpointAuthorizationPolicy;

trait ModifyClientVpnEndpointAuthorizationPolicyTrait
{
    /**
     * @param ModifyClientVpnEndpointAuthorizationPolicyRequest $args
     * @return ModifyClientVpnEndpointAuthorizationPolicyResponse
     */
    public function modifyClientVpnEndpointAuthorizationPolicy(ModifyClientVpnEndpointAuthorizationPolicyRequest $args)
    {
        $result = parent::modifyClientVpnEndpointAuthorizationPolicy($args->toArray());
        return new ModifyClientVpnEndpointAuthorizationPolicyResponse($result->toArray());
    }
}
