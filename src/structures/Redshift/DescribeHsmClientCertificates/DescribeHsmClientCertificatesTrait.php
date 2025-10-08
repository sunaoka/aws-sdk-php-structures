<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeHsmClientCertificates;

trait DescribeHsmClientCertificatesTrait
{
    /**
     * @param DescribeHsmClientCertificatesRequest $args
     * @return DescribeHsmClientCertificatesResponse
     */
    public function describeHsmClientCertificates(DescribeHsmClientCertificatesRequest $args)
    {
        $result = parent::describeHsmClientCertificates($args->toArray());
        return new DescribeHsmClientCertificatesResponse($result->toArray());
    }
}
