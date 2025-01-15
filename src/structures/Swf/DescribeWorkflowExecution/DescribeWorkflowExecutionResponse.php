<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeWorkflowExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\WorkflowExecutionInfo $executionInfo
 * @property Shapes\WorkflowExecutionConfiguration $executionConfiguration
 * @property Shapes\WorkflowExecutionOpenCounts $openCounts
 * @property \Aws\Api\DateTimeResult|null $latestActivityTaskTimestamp
 * @property string|null $latestExecutionContext
 */
class DescribeWorkflowExecutionResponse extends Response
{
}
