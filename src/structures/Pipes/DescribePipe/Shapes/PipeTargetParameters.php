<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PipeTargetBatchJobParameters|null $BatchJobParameters
 * @property PipeTargetCloudWatchLogsParameters|null $CloudWatchLogsParameters
 * @property PipeTargetEcsTaskParameters|null $EcsTaskParameters
 * @property PipeTargetEventBridgeEventBusParameters|null $EventBridgeEventBusParameters
 * @property PipeTargetHttpParameters|null $HttpParameters
 * @property string|null $InputTemplate
 * @property PipeTargetKinesisStreamParameters|null $KinesisStreamParameters
 * @property PipeTargetLambdaFunctionParameters|null $LambdaFunctionParameters
 * @property PipeTargetRedshiftDataParameters|null $RedshiftDataParameters
 * @property PipeTargetSageMakerPipelineParameters|null $SageMakerPipelineParameters
 * @property PipeTargetSqsQueueParameters|null $SqsQueueParameters
 * @property PipeTargetStateMachineParameters|null $StepFunctionStateMachineParameters
 */
class PipeTargetParameters extends Shape
{
    /**
     * @param array{
     *     BatchJobParameters?: PipeTargetBatchJobParameters|null,
     *     CloudWatchLogsParameters?: PipeTargetCloudWatchLogsParameters|null,
     *     EcsTaskParameters?: PipeTargetEcsTaskParameters|null,
     *     EventBridgeEventBusParameters?: PipeTargetEventBridgeEventBusParameters|null,
     *     HttpParameters?: PipeTargetHttpParameters|null,
     *     InputTemplate?: string|null,
     *     KinesisStreamParameters?: PipeTargetKinesisStreamParameters|null,
     *     LambdaFunctionParameters?: PipeTargetLambdaFunctionParameters|null,
     *     RedshiftDataParameters?: PipeTargetRedshiftDataParameters|null,
     *     SageMakerPipelineParameters?: PipeTargetSageMakerPipelineParameters|null,
     *     SqsQueueParameters?: PipeTargetSqsQueueParameters|null,
     *     StepFunctionStateMachineParameters?: PipeTargetStateMachineParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
