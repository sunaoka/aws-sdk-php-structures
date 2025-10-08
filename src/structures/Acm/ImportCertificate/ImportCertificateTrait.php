<?php

namespace Sunaoka\Aws\Structures\Acm\ImportCertificate;

trait ImportCertificateTrait
{
    /**
     * @param ImportCertificateRequest $args
     * @return ImportCertificateResponse
     */
    public function importCertificate(ImportCertificateRequest $args)
    {
        $result = parent::importCertificate($args->toArray());
        return new ImportCertificateResponse($result->toArray());
    }
}
