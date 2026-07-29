<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListPipelineExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NOT_STARTED'|'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLING'|'CANCELLED' $state
 * @property PipelineExecutionStateDetails|null $stateDetails
 */
class PipelineExecutionStatus extends Shape
{
    /**
     * @param array{
     *     state: 'NOT_STARTED'|'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLING'|'CANCELLED',
     *     stateDetails?: PipelineExecutionStateDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
