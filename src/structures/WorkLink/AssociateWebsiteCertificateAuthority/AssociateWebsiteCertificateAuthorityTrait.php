<?php

namespace Sunaoka\Aws\Structures\WorkLink\AssociateWebsiteCertificateAuthority;

trait AssociateWebsiteCertificateAuthorityTrait
{
    /**
     * @param AssociateWebsiteCertificateAuthorityRequest $args
     * @return AssociateWebsiteCertificateAuthorityResponse
     */
    public function associateWebsiteCertificateAuthority(AssociateWebsiteCertificateAuthorityRequest $args)
    {
        $result = parent::associateWebsiteCertificateAuthority($args->toArray());
        return new AssociateWebsiteCertificateAuthorityResponse($result->toArray());
    }
}
