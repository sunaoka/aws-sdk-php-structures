<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancerTlsCertificates;

trait GetLoadBalancerTlsCertificatesTrait
{
    /**
     * @param GetLoadBalancerTlsCertificatesRequest $args
     * @return GetLoadBalancerTlsCertificatesResponse
     */
    public function getLoadBalancerTlsCertificates(GetLoadBalancerTlsCertificatesRequest $args)
    {
        $result = parent::getLoadBalancerTlsCertificates($args->toArray());
        return new GetLoadBalancerTlsCertificatesResponse($result->toArray());
    }
}
