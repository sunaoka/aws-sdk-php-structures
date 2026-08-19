<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCertificateAuthority;

trait DescribeCertificateAuthorityTrait
{
    /**
     * @param DescribeCertificateAuthorityRequest $args
     * @return DescribeCertificateAuthorityResponse
     */
    public function describeCertificateAuthority(DescribeCertificateAuthorityRequest $args)
    {
        $result = parent::describeCertificateAuthority($args->toArray());
        return new DescribeCertificateAuthorityResponse($result->toArray());
    }
}
