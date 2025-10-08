<?php

namespace Sunaoka\Aws\Structures\Ec2\AuthorizeClientVpnIngress;

trait AuthorizeClientVpnIngressTrait
{
    /**
     * @param AuthorizeClientVpnIngressRequest $args
     * @return AuthorizeClientVpnIngressResponse
     */
    public function authorizeClientVpnIngress(AuthorizeClientVpnIngressRequest $args)
    {
        $result = parent::authorizeClientVpnIngress($args->toArray());
        return new AuthorizeClientVpnIngressResponse($result->toArray());
    }
}
