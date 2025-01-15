<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetWorkflowRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $id
 * @property string $workflowId
 * @property 'SUCCEEDED'|'FAILED'|'STOPPED'|'SUPERSEDED'|'CANCELLED'|'NOT_RUN'|'VALIDATING'|'PROVISIONING'|'IN_PROGRESS'|'STOPPING'|'ABANDONED' $status
 * @property list<Shapes\WorkflowRunStatusReason>|null $statusReasons
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 */
class GetWorkflowRunResponse extends Response
{
}
