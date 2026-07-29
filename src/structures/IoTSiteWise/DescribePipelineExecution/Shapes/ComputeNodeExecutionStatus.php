<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NOT_STARTED'|'QUEUED'|'RUNNING'|'SUCCEEDED'|'FAILED' $state
 * @property ComputeNodeExecutionStateDetails|null $stateDetails
 */
class ComputeNodeExecutionStatus extends Shape
{
    /**
     * @param array{
     *     state: 'NOT_STARTED'|'QUEUED'|'RUNNING'|'SUCCEEDED'|'FAILED',
     *     stateDetails?: ComputeNodeExecutionStateDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
