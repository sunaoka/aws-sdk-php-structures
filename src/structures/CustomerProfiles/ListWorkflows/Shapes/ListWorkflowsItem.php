<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'APPFLOW_INTEGRATION' $WorkflowType
 * @property string $WorkflowId
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'SPLIT'|'RETRY'|'CANCELLED' $Status
 * @property string $StatusDescription
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 */
class ListWorkflowsItem extends Shape
{
    /**
     * @param array{
     *     WorkflowType: 'APPFLOW_INTEGRATION',
     *     WorkflowId: string,
     *     Status: 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'SPLIT'|'RETRY'|'CANCELLED',
     *     StatusDescription: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
