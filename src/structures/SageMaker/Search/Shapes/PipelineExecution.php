<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PipelineArn
 * @property string|null $PipelineExecutionArn
 * @property string|null $PipelineExecutionDisplayName
 * @property 'Executing'|'Stopping'|'Stopped'|'Failed'|'Succeeded'|null $PipelineExecutionStatus
 * @property string|null $PipelineExecutionDescription
 * @property PipelineExperimentConfig|null $PipelineExperimentConfig
 * @property string|null $FailureReason
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property UserContext|null $CreatedBy
 * @property UserContext|null $LastModifiedBy
 * @property ParallelismConfiguration|null $ParallelismConfiguration
 * @property list<Parameter>|null $PipelineParameters
 * @property SelectiveExecutionConfig|null $SelectiveExecutionConfig
 */
class PipelineExecution extends Shape
{
    /**
     * @param array{
     *     PipelineArn?: string|null,
     *     PipelineExecutionArn?: string|null,
     *     PipelineExecutionDisplayName?: string|null,
     *     PipelineExecutionStatus?: 'Executing'|'Stopping'|'Stopped'|'Failed'|'Succeeded'|null,
     *     PipelineExecutionDescription?: string|null,
     *     PipelineExperimentConfig?: PipelineExperimentConfig|null,
     *     FailureReason?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: UserContext|null,
     *     LastModifiedBy?: UserContext|null,
     *     ParallelismConfiguration?: ParallelismConfiguration|null,
     *     PipelineParameters?: list<Parameter>|null,
     *     SelectiveExecutionConfig?: SelectiveExecutionConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
