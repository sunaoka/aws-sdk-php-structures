<?php

namespace Sunaoka\Aws\Structures\NovaAct\ListWorkflowDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowDefinitionArn
 * @property string $workflowDefinitionName
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'ACTIVE'|'DELETING' $status
 */
class WorkflowDefinitionSummary extends Shape
{
    /**
     * @param array{
     *     workflowDefinitionArn: string,
     *     workflowDefinitionName: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     status: 'ACTIVE'|'DELETING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
