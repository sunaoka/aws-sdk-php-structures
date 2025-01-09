<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowStepExecutions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $requestId
 * @property list<Shapes\WorkflowStepMetadata> $steps
 * @property string $workflowBuildVersionArn
 * @property string $workflowExecutionId
 * @property string $imageBuildVersionArn
 * @property string $message
 * @property string $nextToken
 */
class ListWorkflowStepExecutionsResponse extends Response
{
}
