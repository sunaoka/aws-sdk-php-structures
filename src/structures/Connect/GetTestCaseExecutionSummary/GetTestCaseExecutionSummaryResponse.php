<?php

namespace Sunaoka\Aws\Structures\Connect\GetTestCaseExecutionSummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'INITIATED'|'PASSED'|'FAILED'|'IN_PROGRESS'|'STOPPED'|null $Status
 * @property Shapes\ObservationSummary|null $ObservationSummary
 */
class GetTestCaseExecutionSummaryResponse extends Response
{
}
