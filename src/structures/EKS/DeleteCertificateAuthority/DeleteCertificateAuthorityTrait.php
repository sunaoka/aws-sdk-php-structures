<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteCertificateAuthority;

trait DeleteCertificateAuthorityTrait
{
    /**
     * @param DeleteCertificateAuthorityRequest $args
     * @return DeleteCertificateAuthorityResponse
     */
    public function deleteCertificateAuthority(DeleteCertificateAuthorityRequest $args)
    {
        $result = parent::deleteCertificateAuthority($args->toArray());
        return new DeleteCertificateAuthorityResponse($result->toArray());
    }
}
