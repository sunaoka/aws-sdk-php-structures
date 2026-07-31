<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\StopTestRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $testRunId
 * @property 'INITIALIZING'|'RUNNING'|'STOPPING'|'PASSED'|'FAILED'|'STOPPED'|'ERROR' $status
 */
class StopTestRunResponse extends Response
{
}
