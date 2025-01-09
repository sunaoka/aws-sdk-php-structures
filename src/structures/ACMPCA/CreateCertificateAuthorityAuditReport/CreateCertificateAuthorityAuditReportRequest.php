<?php

namespace Sunaoka\Aws\Structures\ACMPCA\CreateCertificateAuthorityAuditReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property string $S3BucketName
 * @property 'JSON'|'CSV' $AuditReportResponseFormat
 */
class CreateCertificateAuthorityAuditReportRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     S3BucketName: string,
     *     AuditReportResponseFormat: 'JSON'|'CSV'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
