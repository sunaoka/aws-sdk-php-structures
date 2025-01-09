<?php

namespace Sunaoka\Aws\Structures\ACMPCA\DescribeCertificateAuthorityAuditReport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CREATING'|'SUCCESS'|'FAILED' $AuditReportStatus
 * @property string $S3BucketName
 * @property string $S3Key
 * @property \Aws\Api\DateTimeResult $CreatedAt
 */
class DescribeCertificateAuthorityAuditReportResponse extends Response
{
}
