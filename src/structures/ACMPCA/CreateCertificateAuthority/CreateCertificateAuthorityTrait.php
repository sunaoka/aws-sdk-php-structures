<?php

namespace Sunaoka\Aws\Structures\ACMPCA\CreateCertificateAuthority;

trait CreateCertificateAuthorityTrait
{
    /**
     * @param CreateCertificateAuthorityRequest $args
     * @return CreateCertificateAuthorityResponse
     */
    public function createCertificateAuthority(CreateCertificateAuthorityRequest $args)
    {
        $result = parent::createCertificateAuthority($args->toArray());
        return new CreateCertificateAuthorityResponse($result->toArray());
    }
}
