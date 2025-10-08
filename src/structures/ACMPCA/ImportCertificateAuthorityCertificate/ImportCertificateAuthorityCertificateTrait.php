<?php

namespace Sunaoka\Aws\Structures\ACMPCA\ImportCertificateAuthorityCertificate;

trait ImportCertificateAuthorityCertificateTrait
{
    /**
     * @param ImportCertificateAuthorityCertificateRequest $args
     * @return void
     */
    public function importCertificateAuthorityCertificate(ImportCertificateAuthorityCertificateRequest $args)
    {
        parent::importCertificateAuthorityCertificate($args->toArray());
    }
}
