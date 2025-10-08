<?php

namespace Sunaoka\Aws\Structures\ACMPCA\GetCertificateAuthorityCsr;

trait GetCertificateAuthorityCsrTrait
{
    /**
     * @param GetCertificateAuthorityCsrRequest $args
     * @return GetCertificateAuthorityCsrResponse
     */
    public function getCertificateAuthorityCsr(GetCertificateAuthorityCsrRequest $args)
    {
        $result = parent::getCertificateAuthorityCsr($args->toArray());
        return new GetCertificateAuthorityCsrResponse($result->toArray());
    }
}
