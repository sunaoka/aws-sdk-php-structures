<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateWorkflowStepGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $workflowId
 * @property string|null $name
 * @property string|null $id
 * @property string|null $description
 * @property list<Shapes\Tool>|null $tools
 * @property list<string>|null $next
 * @property list<string>|null $previous
 * @property \Aws\Api\DateTimeResult|null $creationTime
 */
class CreateWorkflowStepGroupResponse extends Response
{
}
