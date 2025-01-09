<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PipelineArn
 * @property string $PipelineExecutionArn
 * @property string $PipelineExecutionDisplayName
 * @property 'Executing'|'Stopping'|'Stopped'|'Failed'|'Succeeded' $PipelineExecutionStatus
 * @property string $PipelineExecutionDescription
 * @property PipelineExperimentConfig $PipelineExperimentConfig
 * @property string $FailureReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property UserContext $CreatedBy
 * @property UserContext $LastModifiedBy
 * @property ParallelismConfiguration $ParallelismConfiguration
 * @property SelectiveExecutionConfig $SelectiveExecutionConfig
 * @property list<Parameter> $PipelineParameters
 */
class PipelineExecution extends Shape
{
    /**
     * @param array{
     *     PipelineArn?: string,
     *     PipelineExecutionArn?: string,
     *     PipelineExecutionDisplayName?: string,
     *     PipelineExecutionStatus?: 'Executing'|'Stopping'|'Stopped'|'Failed'|'Succeeded',
     *     PipelineExecutionDescription?: string,
     *     PipelineExperimentConfig?: PipelineExperimentConfig,
     *     FailureReason?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: UserContext,
     *     LastModifiedBy?: UserContext,
     *     ParallelismConfiguration?: ParallelismConfiguration,
     *     SelectiveExecutionConfig?: SelectiveExecutionConfig,
     *     PipelineParameters?: list<Parameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
