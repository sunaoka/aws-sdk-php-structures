<?php

namespace Sunaoka\Aws\Structures\ACMPCA\TagCertificateAuthority;

trait TagCertificateAuthorityTrait
{
    /**
     * @param TagCertificateAuthorityRequest $args
     * @return void
     */
    public function tagCertificateAuthority(TagCertificateAuthorityRequest $args)
    {
        parent::tagCertificateAuthority($args->toArray());
    }
}
