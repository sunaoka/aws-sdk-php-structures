<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchFlowExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $flowExecutionId
 * @property 'RUNNING'|'ABORTED'|'SUCCEEDED'|'FAILED' $status
 * @property string $systemInstanceId
 * @property string $flowTemplateId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class FlowExecutionSummary extends Shape
{
    /**
     * @param array{
     *     flowExecutionId?: string,
     *     status?: 'RUNNING'|'ABORTED'|'SUCCEEDED'|'FAILED',
     *     systemInstanceId?: string,
     *     flowTemplateId?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
