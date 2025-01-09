<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeWorkflowExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\WorkflowExecutionInfo $executionInfo
 * @property Shapes\WorkflowExecutionConfiguration $executionConfiguration
 * @property Shapes\WorkflowExecutionOpenCounts $openCounts
 * @property \Aws\Api\DateTimeResult $latestActivityTaskTimestamp
 * @property string $latestExecutionContext
 */
class DescribeWorkflowExecutionResponse extends Response
{
}
