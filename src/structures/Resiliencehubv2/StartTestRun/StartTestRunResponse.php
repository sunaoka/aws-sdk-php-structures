<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\StartTestRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $testRunId
 * @property 'INITIALIZING'|'RUNNING'|'STOPPING'|'PASSED'|'FAILED'|'STOPPED'|'ERROR' $status
 * @property list<string> $experimentArns
 */
class StartTestRunResponse extends Response
{
}
