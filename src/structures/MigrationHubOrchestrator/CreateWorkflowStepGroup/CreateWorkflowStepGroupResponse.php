<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateWorkflowStepGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workflowId
 * @property string $name
 * @property string $id
 * @property string $description
 * @property list<Shapes\Tool> $tools
 * @property list<string> $next
 * @property list<string> $previous
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class CreateWorkflowStepGroupResponse extends Response
{
}
