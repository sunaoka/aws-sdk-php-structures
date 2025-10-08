<?php

namespace Sunaoka\Aws\Structures\ACMPCA\RestoreCertificateAuthority;

trait RestoreCertificateAuthorityTrait
{
    /**
     * @param RestoreCertificateAuthorityRequest $args
     * @return void
     */
    public function restoreCertificateAuthority(RestoreCertificateAuthorityRequest $args)
    {
        parent::restoreCertificateAuthority($args->toArray());
    }
}
