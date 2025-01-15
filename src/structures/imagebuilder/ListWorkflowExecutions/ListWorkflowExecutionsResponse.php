<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowExecutions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $requestId
 * @property list<Shapes\WorkflowExecutionMetadata>|null $workflowExecutions
 * @property string|null $imageBuildVersionArn
 * @property string|null $message
 * @property string|null $nextToken
 */
class ListWorkflowExecutionsResponse extends Response
{
}
