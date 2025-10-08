<?php

namespace Sunaoka\Aws\Structures\Lightsail\AttachLoadBalancerTlsCertificate;

trait AttachLoadBalancerTlsCertificateTrait
{
    /**
     * @param AttachLoadBalancerTlsCertificateRequest $args
     * @return AttachLoadBalancerTlsCertificateResponse
     */
    public function attachLoadBalancerTlsCertificate(AttachLoadBalancerTlsCertificateRequest $args)
    {
        $result = parent::attachLoadBalancerTlsCertificate($args->toArray());
        return new AttachLoadBalancerTlsCertificateResponse($result->toArray());
    }
}
