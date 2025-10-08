<?php

namespace Sunaoka\Aws\Structures\ACMPCA\UntagCertificateAuthority;

trait UntagCertificateAuthorityTrait
{
    /**
     * @param UntagCertificateAuthorityRequest $args
     * @return void
     */
    public function untagCertificateAuthority(UntagCertificateAuthorityRequest $args)
    {
        parent::untagCertificateAuthority($args->toArray());
    }
}
