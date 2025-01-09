<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListFlowDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FlowDefinitionName
 * @property string $FlowDefinitionArn
 * @property 'Initializing'|'Active'|'Failed'|'Deleting' $FlowDefinitionStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $FailureReason
 */
class FlowDefinitionSummary extends Shape
{
    /**
     * @param array{
     *     FlowDefinitionName: string,
     *     FlowDefinitionArn: string,
     *     FlowDefinitionStatus: 'Initializing'|'Active'|'Failed'|'Deleting',
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     FailureReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
