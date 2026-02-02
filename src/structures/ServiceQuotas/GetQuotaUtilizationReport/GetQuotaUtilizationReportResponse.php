<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetQuotaUtilizationReport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ReportId
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $GeneratedAt
 * @property int<0, 2147483647>|null $TotalCount
 * @property list<Shapes\QuotaUtilizationInfo>|null $Quotas
 * @property string|null $NextToken
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class GetQuotaUtilizationReportResponse extends Response
{
}
