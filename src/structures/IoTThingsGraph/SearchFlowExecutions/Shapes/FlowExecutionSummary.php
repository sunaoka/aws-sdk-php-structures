<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchFlowExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $flowExecutionId
 * @property 'RUNNING'|'ABORTED'|'SUCCEEDED'|'FAILED'|null $status
 * @property string|null $systemInstanceId
 * @property string|null $flowTemplateId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class FlowExecutionSummary extends Shape
{
    /**
     * @param array{
     *     flowExecutionId?: string|null,
     *     status?: 'RUNNING'|'ABORTED'|'SUCCEEDED'|'FAILED'|null,
     *     systemInstanceId?: string|null,
     *     flowTemplateId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
