<?php

namespace Sunaoka\Aws\Structures\ACMPCA\DescribeCertificateAuthorityAuditReport;

trait DescribeCertificateAuthorityAuditReportTrait
{
    /**
     * @param DescribeCertificateAuthorityAuditReportRequest $args
     * @return DescribeCertificateAuthorityAuditReportResponse
     */
    public function describeCertificateAuthorityAuditReport(DescribeCertificateAuthorityAuditReportRequest $args)
    {
        $result = parent::describeCertificateAuthorityAuditReport($args->toArray());
        return new DescribeCertificateAuthorityAuditReportResponse($result->toArray());
    }
}
