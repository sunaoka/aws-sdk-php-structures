<?php

namespace Sunaoka\Aws\Structures\NovaAct\CreateWorkflowRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workflowRunId
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'DELETING' $status
 */
class CreateWorkflowRunResponse extends Response
{
}
