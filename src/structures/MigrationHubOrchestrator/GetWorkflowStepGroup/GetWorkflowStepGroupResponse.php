<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetWorkflowStepGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $workflowId
 * @property string $name
 * @property string $description
 * @property 'AWAITING_DEPENDENCIES'|'READY'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PAUSED'|'PAUSING'|'USER_ATTENTION_REQUIRED' $status
 * @property 'AWS_MANAGED'|'CUSTOM' $owner
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property list<Shapes\Tool> $tools
 * @property list<string> $previous
 * @property list<string> $next
 */
class GetWorkflowStepGroupResponse extends Response
{
}
