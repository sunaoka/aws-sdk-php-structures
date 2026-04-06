<?php

namespace Sunaoka\Aws\Structures\WorkLink\DisassociateWebsiteCertificateAuthority;

trait DisassociateWebsiteCertificateAuthorityTrait
{
    /**
     * @param DisassociateWebsiteCertificateAuthorityRequest $args
     * @return DisassociateWebsiteCertificateAuthorityResponse
     */
    public function disassociateWebsiteCertificateAuthority(DisassociateWebsiteCertificateAuthorityRequest $args)
    {
        $result = parent::disassociateWebsiteCertificateAuthority($args->toArray());
        return new DisassociateWebsiteCertificateAuthorityResponse($result->toArray());
    }
}
