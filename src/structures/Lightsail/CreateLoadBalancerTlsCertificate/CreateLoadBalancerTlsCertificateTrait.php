<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateLoadBalancerTlsCertificate;

trait CreateLoadBalancerTlsCertificateTrait
{
    /**
     * @param CreateLoadBalancerTlsCertificateRequest $args
     * @return CreateLoadBalancerTlsCertificateResponse
     */
    public function createLoadBalancerTlsCertificate(CreateLoadBalancerTlsCertificateRequest $args)
    {
        $result = parent::createLoadBalancerTlsCertificate($args->toArray());
        return new CreateLoadBalancerTlsCertificateResponse($result->toArray());
    }
}
