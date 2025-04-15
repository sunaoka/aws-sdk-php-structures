<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListIdMappingWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowName
 * @property string $workflowArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class IdMappingWorkflowSummary extends Shape
{
    /**
     * @param array{
     *     workflowName: string,
     *     workflowArn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
