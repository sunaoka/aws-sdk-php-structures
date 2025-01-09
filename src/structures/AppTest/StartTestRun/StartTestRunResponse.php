<?php

namespace Sunaoka\Aws\Structures\AppTest\StartTestRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $testRunId
 * @property 'Success'|'Running'|'Failed'|'Deleting' $testRunStatus
 */
class StartTestRunResponse extends Response
{
}
