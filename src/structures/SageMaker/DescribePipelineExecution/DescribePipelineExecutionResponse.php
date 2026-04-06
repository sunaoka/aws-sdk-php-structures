<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePipelineExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $PipelineArn
 * @property string|null $PipelineExecutionArn
 * @property string|null $PipelineExecutionDisplayName
 * @property 'Executing'|'Stopping'|'Stopped'|'Failed'|'Succeeded'|null $PipelineExecutionStatus
 * @property string|null $PipelineExecutionDescription
 * @property Shapes\PipelineExperimentConfig|null $PipelineExperimentConfig
 * @property string|null $FailureReason
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\UserContext|null $CreatedBy
 * @property Shapes\UserContext|null $LastModifiedBy
 * @property Shapes\ParallelismConfiguration|null $ParallelismConfiguration
 * @property Shapes\SelectiveExecutionConfig|null $SelectiveExecutionConfig
 * @property int<1, max>|null $PipelineVersionId
 * @property Shapes\MLflowConfiguration|null $MLflowConfig
 */
class DescribePipelineExecutionResponse extends Response
{
}
