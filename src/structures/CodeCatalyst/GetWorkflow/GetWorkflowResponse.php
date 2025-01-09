<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $id
 * @property string $name
 * @property string $sourceRepositoryName
 * @property string $sourceBranchName
 * @property Shapes\WorkflowDefinition $definition
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property 'QUEUED'|'PARALLEL'|'SUPERSEDED' $runMode
 * @property 'INVALID'|'ACTIVE' $status
 */
class GetWorkflowResponse extends Response
{
}
