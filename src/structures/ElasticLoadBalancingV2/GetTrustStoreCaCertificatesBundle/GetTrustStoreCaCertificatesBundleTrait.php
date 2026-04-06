<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\GetTrustStoreCaCertificatesBundle;

trait GetTrustStoreCaCertificatesBundleTrait
{
    /**
     * @param GetTrustStoreCaCertificatesBundleRequest $args
     * @return GetTrustStoreCaCertificatesBundleResponse
     */
    public function getTrustStoreCaCertificatesBundle(GetTrustStoreCaCertificatesBundleRequest $args)
    {
        $result = parent::getTrustStoreCaCertificatesBundle($args->toArray());
        return new GetTrustStoreCaCertificatesBundleResponse($result->toArray());
    }
}
