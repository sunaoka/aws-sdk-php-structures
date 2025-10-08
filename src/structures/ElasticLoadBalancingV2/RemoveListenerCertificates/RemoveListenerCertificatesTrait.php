<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\RemoveListenerCertificates;

trait RemoveListenerCertificatesTrait
{
    /**
     * @param RemoveListenerCertificatesRequest $args
     * @return RemoveListenerCertificatesResponse
     */
    public function removeListenerCertificates(RemoveListenerCertificatesRequest $args)
    {
        $result = parent::removeListenerCertificates($args->toArray());
        return new RemoveListenerCertificatesResponse($result->toArray());
    }
}
