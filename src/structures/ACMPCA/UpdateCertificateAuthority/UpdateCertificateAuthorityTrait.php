<?php

namespace Sunaoka\Aws\Structures\ACMPCA\UpdateCertificateAuthority;

trait UpdateCertificateAuthorityTrait
{
    /**
     * @param UpdateCertificateAuthorityRequest $args
     * @return void
     */
    public function updateCertificateAuthority(UpdateCertificateAuthorityRequest $args)
    {
        parent::updateCertificateAuthority($args->toArray());
    }
}
