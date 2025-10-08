<?php

namespace Sunaoka\Aws\Structures\Ec2\RevokeClientVpnIngress;

trait RevokeClientVpnIngressTrait
{
    /**
     * @param RevokeClientVpnIngressRequest $args
     * @return RevokeClientVpnIngressResponse
     */
    public function revokeClientVpnIngress(RevokeClientVpnIngressRequest $args)
    {
        $result = parent::revokeClientVpnIngress($args->toArray());
        return new RevokeClientVpnIngressResponse($result->toArray());
    }
}
