<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\AddListenerCertificates;

trait AddListenerCertificatesTrait
{
    /**
     * @param AddListenerCertificatesRequest $args
     * @return AddListenerCertificatesResponse
     */
    public function addListenerCertificates(AddListenerCertificatesRequest $args)
    {
        $result = parent::addListenerCertificates($args->toArray());
        return new AddListenerCertificatesResponse($result->toArray());
    }
}
