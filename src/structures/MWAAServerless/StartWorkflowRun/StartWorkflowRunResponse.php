<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\StartWorkflowRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $RunId
 * @property 'STARTING'|'QUEUED'|'RUNNING'|'SUCCESS'|'FAILED'|'TIMEOUT'|'STOPPING'|'STOPPED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 */
class StartWorkflowRunResponse extends Response
{
}
