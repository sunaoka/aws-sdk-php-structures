<?php

namespace Sunaoka\Aws\Structures\NovaAct\GetWorkflowRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workflowRunArn
 * @property string $workflowRunId
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property string $modelId
 * @property string|null $logGroupName
 */
class GetWorkflowRunResponse extends Response
{
}
