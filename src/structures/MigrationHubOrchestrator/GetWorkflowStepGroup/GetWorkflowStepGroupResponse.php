<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetWorkflowStepGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $workflowId
 * @property string|null $name
 * @property string|null $description
 * @property 'AWAITING_DEPENDENCIES'|'READY'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PAUSED'|'PAUSING'|'USER_ATTENTION_REQUIRED'|null $status
 * @property 'AWS_MANAGED'|'CUSTOM'|null $owner
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property list<Shapes\Tool>|null $tools
 * @property list<string>|null $previous
 * @property list<string>|null $next
 */
class GetWorkflowStepGroupResponse extends Response
{
}
