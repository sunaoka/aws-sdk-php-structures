<?php

namespace Sunaoka\Aws\Structures\ACMPCA\CreateCertificateAuthorityAuditReport;

trait CreateCertificateAuthorityAuditReportTrait
{
    /**
     * @param CreateCertificateAuthorityAuditReportRequest $args
     * @return CreateCertificateAuthorityAuditReportResponse
     */
    public function createCertificateAuthorityAuditReport(CreateCertificateAuthorityAuditReportRequest $args)
    {
        $result = parent::createCertificateAuthorityAuditReport($args->toArray());
        return new CreateCertificateAuthorityAuditReportResponse($result->toArray());
    }
}
