<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetOpportunityBulkJobReportUrl;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'AVAILABLE'|'FAILED'|'EXPIRED' $ReportStatus
 * @property 'FAILED_RECORDS'|'ALL_RECORDS' $ReportType
 * @property 'CSV' $ReportFormat
 * @property string|null $Url
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 * @property string|null $FailureReason
 */
class GetOpportunityBulkJobReportUrlResponse extends Response
{
}
