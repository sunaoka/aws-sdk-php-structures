<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchGetServiceLevelObjectiveBudgetReport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property list<Shapes\ServiceLevelObjectiveBudgetReport> $Reports
 * @property list<Shapes\ServiceLevelObjectiveBudgetReportError> $Errors
 */
class BatchGetServiceLevelObjectiveBudgetReportResponse extends Response
{
}
