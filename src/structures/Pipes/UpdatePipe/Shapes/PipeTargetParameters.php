<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InputTemplate
 * @property PipeTargetLambdaFunctionParameters $LambdaFunctionParameters
 * @property PipeTargetStateMachineParameters $StepFunctionStateMachineParameters
 * @property PipeTargetKinesisStreamParameters $KinesisStreamParameters
 * @property PipeTargetEcsTaskParameters $EcsTaskParameters
 * @property PipeTargetBatchJobParameters $BatchJobParameters
 * @property PipeTargetSqsQueueParameters $SqsQueueParameters
 * @property PipeTargetHttpParameters $HttpParameters
 * @property PipeTargetRedshiftDataParameters $RedshiftDataParameters
 * @property PipeTargetSageMakerPipelineParameters $SageMakerPipelineParameters
 * @property PipeTargetEventBridgeEventBusParameters $EventBridgeEventBusParameters
 * @property PipeTargetCloudWatchLogsParameters $CloudWatchLogsParameters
 * @property PipeTargetTimestreamParameters $TimestreamParameters
 */
class PipeTargetParameters extends Shape
{
    /**
     * @param array{
     *     InputTemplate?: string,
     *     LambdaFunctionParameters?: PipeTargetLambdaFunctionParameters,
     *     StepFunctionStateMachineParameters?: PipeTargetStateMachineParameters,
     *     KinesisStreamParameters?: PipeTargetKinesisStreamParameters,
     *     EcsTaskParameters?: PipeTargetEcsTaskParameters,
     *     BatchJobParameters?: PipeTargetBatchJobParameters,
     *     SqsQueueParameters?: PipeTargetSqsQueueParameters,
     *     HttpParameters?: PipeTargetHttpParameters,
     *     RedshiftDataParameters?: PipeTargetRedshiftDataParameters,
     *     SageMakerPipelineParameters?: PipeTargetSageMakerPipelineParameters,
     *     EventBridgeEventBusParameters?: PipeTargetEventBridgeEventBusParameters,
     *     CloudWatchLogsParameters?: PipeTargetCloudWatchLogsParameters,
     *     TimestreamParameters?: PipeTargetTimestreamParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
