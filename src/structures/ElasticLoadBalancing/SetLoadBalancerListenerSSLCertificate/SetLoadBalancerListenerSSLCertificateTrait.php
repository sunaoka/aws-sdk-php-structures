<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\SetLoadBalancerListenerSSLCertificate;

trait SetLoadBalancerListenerSSLCertificateTrait
{
    /**
     * @param SetLoadBalancerListenerSSLCertificateRequest $args
     * @return SetLoadBalancerListenerSSLCertificateResponse
     */
    public function setLoadBalancerListenerSSLCertificate(SetLoadBalancerListenerSSLCertificateRequest $args)
    {
        $result = parent::setLoadBalancerListenerSSLCertificate($args->toArray());
        return new SetLoadBalancerListenerSSLCertificateResponse($result->toArray());
    }
}
