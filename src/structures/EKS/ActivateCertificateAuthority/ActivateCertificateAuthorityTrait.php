<?php

namespace Sunaoka\Aws\Structures\EKS\ActivateCertificateAuthority;

trait ActivateCertificateAuthorityTrait
{
    /**
     * @param ActivateCertificateAuthorityRequest $args
     * @return ActivateCertificateAuthorityResponse
     */
    public function activateCertificateAuthority(ActivateCertificateAuthorityRequest $args)
    {
        $result = parent::activateCertificateAuthority($args->toArray());
        return new ActivateCertificateAuthorityResponse($result->toArray());
    }
}
