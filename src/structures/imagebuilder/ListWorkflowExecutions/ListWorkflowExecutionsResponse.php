<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowExecutions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $requestId
 * @property list<Shapes\WorkflowExecutionMetadata> $workflowExecutions
 * @property string $imageBuildVersionArn
 * @property string $message
 * @property string $nextToken
 */
class ListWorkflowExecutionsResponse extends Response
{
}
