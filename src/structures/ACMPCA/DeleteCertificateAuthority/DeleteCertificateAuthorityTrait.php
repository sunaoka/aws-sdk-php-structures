<?php

namespace Sunaoka\Aws\Structures\ACMPCA\DeleteCertificateAuthority;

trait DeleteCertificateAuthorityTrait
{
    /**
     * @param DeleteCertificateAuthorityRequest $args
     * @return void
     */
    public function deleteCertificateAuthority(DeleteCertificateAuthorityRequest $args)
    {
        parent::deleteCertificateAuthority($args->toArray());
    }
}
