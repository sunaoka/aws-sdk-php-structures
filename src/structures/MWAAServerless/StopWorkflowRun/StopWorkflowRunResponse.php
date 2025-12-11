<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\StopWorkflowRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WorkflowArn
 * @property string|null $WorkflowVersion
 * @property string|null $RunId
 * @property 'STARTING'|'QUEUED'|'RUNNING'|'SUCCESS'|'FAILED'|'TIMEOUT'|'STOPPING'|'STOPPED'|null $Status
 */
class StopWorkflowRunResponse extends Response
{
}
