<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowStepExecutions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $requestId
 * @property list<Shapes\WorkflowStepMetadata>|null $steps
 * @property string|null $workflowBuildVersionArn
 * @property string|null $workflowExecutionId
 * @property string|null $imageBuildVersionArn
 * @property string|null $message
 * @property string|null $nextToken
 */
class ListWorkflowStepExecutionsResponse extends Response
{
}
