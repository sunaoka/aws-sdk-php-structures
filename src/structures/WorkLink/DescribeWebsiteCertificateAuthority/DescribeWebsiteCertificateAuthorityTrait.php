<?php

namespace Sunaoka\Aws\Structures\WorkLink\DescribeWebsiteCertificateAuthority;

trait DescribeWebsiteCertificateAuthorityTrait
{
    /**
     * @param DescribeWebsiteCertificateAuthorityRequest $args
     * @return DescribeWebsiteCertificateAuthorityResponse
     */
    public function describeWebsiteCertificateAuthority(DescribeWebsiteCertificateAuthorityRequest $args)
    {
        $result = parent::describeWebsiteCertificateAuthority($args->toArray());
        return new DescribeWebsiteCertificateAuthorityResponse($result->toArray());
    }
}
