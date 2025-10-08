<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeListenerCertificates;

trait DescribeListenerCertificatesTrait
{
    /**
     * @param DescribeListenerCertificatesRequest $args
     * @return DescribeListenerCertificatesResponse
     */
    public function describeListenerCertificates(DescribeListenerCertificatesRequest $args)
    {
        $result = parent::describeListenerCertificates($args->toArray());
        return new DescribeListenerCertificatesResponse($result->toArray());
    }
}
