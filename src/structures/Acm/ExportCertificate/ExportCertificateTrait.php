<?php

namespace Sunaoka\Aws\Structures\Acm\ExportCertificate;

trait ExportCertificateTrait
{
    /**
     * @param ExportCertificateRequest $args
     * @return ExportCertificateResponse
     */
    public function exportCertificate(ExportCertificateRequest $args)
    {
        $result = parent::exportCertificate($args->toArray());
        return new ExportCertificateResponse($result->toArray());
    }
}
