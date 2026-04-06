<?php

namespace Sunaoka\Aws\Structures\Connect\StartTestCaseExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TestCaseExecutionId
 * @property string|null $TestCaseId
 * @property 'INITIATED'|'PASSED'|'FAILED'|'IN_PROGRESS'|'STOPPED'|null $Status
 */
class StartTestCaseExecutionResponse extends Response
{
}
