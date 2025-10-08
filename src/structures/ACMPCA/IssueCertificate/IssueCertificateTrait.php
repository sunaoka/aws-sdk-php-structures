<?php

namespace Sunaoka\Aws\Structures\ACMPCA\IssueCertificate;

trait IssueCertificateTrait
{
    /**
     * @param IssueCertificateRequest $args
     * @return IssueCertificateResponse
     */
    public function issueCertificate(IssueCertificateRequest $args)
    {
        $result = parent::issueCertificate($args->toArray());
        return new IssueCertificateResponse($result->toArray());
    }
}
