<?php

namespace Sunaoka\Aws\Structures\ACMPCA\DescribeCertificateAuthorityAuditReport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CREATING'|'SUCCESS'|'FAILED'|null $AuditReportStatus
 * @property string|null $S3BucketName
 * @property string|null $S3Key
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 */
class DescribeCertificateAuthorityAuditReportResponse extends Response
{
}
