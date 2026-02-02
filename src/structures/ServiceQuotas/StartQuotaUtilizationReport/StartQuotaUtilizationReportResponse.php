<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\StartQuotaUtilizationReport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ReportId
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $Status
 * @property string|null $Message
 */
class StartQuotaUtilizationReportResponse extends Response
{
}
