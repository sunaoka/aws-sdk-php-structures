<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteLoadBalancerTlsCertificate;

trait DeleteLoadBalancerTlsCertificateTrait
{
    /**
     * @param DeleteLoadBalancerTlsCertificateRequest $args
     * @return DeleteLoadBalancerTlsCertificateResponse
     */
    public function deleteLoadBalancerTlsCertificate(DeleteLoadBalancerTlsCertificateRequest $args)
    {
        $result = parent::deleteLoadBalancerTlsCertificate($args->toArray());
        return new DeleteLoadBalancerTlsCertificateResponse($result->toArray());
    }
}
