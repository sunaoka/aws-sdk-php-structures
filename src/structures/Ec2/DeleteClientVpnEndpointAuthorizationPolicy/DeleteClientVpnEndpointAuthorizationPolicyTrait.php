<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteClientVpnEndpointAuthorizationPolicy;

trait DeleteClientVpnEndpointAuthorizationPolicyTrait
{
    /**
     * @param DeleteClientVpnEndpointAuthorizationPolicyRequest $args
     * @return DeleteClientVpnEndpointAuthorizationPolicyResponse
     */
    public function deleteClientVpnEndpointAuthorizationPolicy(DeleteClientVpnEndpointAuthorizationPolicyRequest $args)
    {
        $result = parent::deleteClientVpnEndpointAuthorizationPolicy($args->toArray());
        return new DeleteClientVpnEndpointAuthorizationPolicyResponse($result->toArray());
    }
}
