<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InputTemplate
 * @property PipeTargetLambdaFunctionParameters|null $LambdaFunctionParameters
 * @property PipeTargetStateMachineParameters|null $StepFunctionStateMachineParameters
 * @property PipeTargetKinesisStreamParameters|null $KinesisStreamParameters
 * @property PipeTargetEcsTaskParameters|null $EcsTaskParameters
 * @property PipeTargetBatchJobParameters|null $BatchJobParameters
 * @property PipeTargetSqsQueueParameters|null $SqsQueueParameters
 * @property PipeTargetHttpParameters|null $HttpParameters
 * @property PipeTargetRedshiftDataParameters|null $RedshiftDataParameters
 * @property PipeTargetSageMakerPipelineParameters|null $SageMakerPipelineParameters
 * @property PipeTargetEventBridgeEventBusParameters|null $EventBridgeEventBusParameters
 * @property PipeTargetCloudWatchLogsParameters|null $CloudWatchLogsParameters
 * @property PipeTargetTimestreamParameters|null $TimestreamParameters
 */
class PipeTargetParameters extends Shape
{
    /**
     * @param array{
     *     InputTemplate?: string|null,
     *     LambdaFunctionParameters?: PipeTargetLambdaFunctionParameters|null,
     *     StepFunctionStateMachineParameters?: PipeTargetStateMachineParameters|null,
     *     KinesisStreamParameters?: PipeTargetKinesisStreamParameters|null,
     *     EcsTaskParameters?: PipeTargetEcsTaskParameters|null,
     *     BatchJobParameters?: PipeTargetBatchJobParameters|null,
     *     SqsQueueParameters?: PipeTargetSqsQueueParameters|null,
     *     HttpParameters?: PipeTargetHttpParameters|null,
     *     RedshiftDataParameters?: PipeTargetRedshiftDataParameters|null,
     *     SageMakerPipelineParameters?: PipeTargetSageMakerPipelineParameters|null,
     *     EventBridgeEventBusParameters?: PipeTargetEventBridgeEventBusParameters|null,
     *     CloudWatchLogsParameters?: PipeTargetCloudWatchLogsParameters|null,
     *     TimestreamParameters?: PipeTargetTimestreamParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
