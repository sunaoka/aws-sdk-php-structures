<?php

namespace Sunaoka\Aws\Structures\ACMPCA\GetCertificateAuthorityCertificate;

trait GetCertificateAuthorityCertificateTrait
{
    /**
     * @param GetCertificateAuthorityCertificateRequest $args
     * @return GetCertificateAuthorityCertificateResponse
     */
    public function getCertificateAuthorityCertificate(GetCertificateAuthorityCertificateRequest $args)
    {
        $result = parent::getCertificateAuthorityCertificate($args->toArray());
        return new GetCertificateAuthorityCertificateResponse($result->toArray());
    }
}
