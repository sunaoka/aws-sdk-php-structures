<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePipelineExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $PipelineArn
 * @property string $PipelineExecutionArn
 * @property string $PipelineExecutionDisplayName
 * @property 'Executing'|'Stopping'|'Stopped'|'Failed'|'Succeeded' $PipelineExecutionStatus
 * @property string $PipelineExecutionDescription
 * @property Shapes\PipelineExperimentConfig $PipelineExperimentConfig
 * @property string $FailureReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\UserContext $CreatedBy
 * @property Shapes\UserContext $LastModifiedBy
 * @property Shapes\ParallelismConfiguration $ParallelismConfiguration
 * @property Shapes\SelectiveExecutionConfig $SelectiveExecutionConfig
 */
class DescribePipelineExecutionResponse extends Response
{
}
