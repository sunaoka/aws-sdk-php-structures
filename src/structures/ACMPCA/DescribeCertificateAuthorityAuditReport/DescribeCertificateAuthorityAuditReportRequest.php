<?php

namespace Sunaoka\Aws\Structures\ACMPCA\DescribeCertificateAuthorityAuditReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property string $AuditReportId
 */
class DescribeCertificateAuthorityAuditReportRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     AuditReportId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
