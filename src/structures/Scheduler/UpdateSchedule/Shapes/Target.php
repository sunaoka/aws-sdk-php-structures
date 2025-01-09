<?php

namespace Sunaoka\Aws\Structures\Scheduler\UpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property DeadLetterConfig $DeadLetterConfig
 * @property EcsParameters $EcsParameters
 * @property EventBridgeParameters $EventBridgeParameters
 * @property string $Input
 * @property KinesisParameters $KinesisParameters
 * @property RetryPolicy $RetryPolicy
 * @property string $RoleArn
 * @property SageMakerPipelineParameters $SageMakerPipelineParameters
 * @property SqsParameters $SqsParameters
 */
class Target extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     DeadLetterConfig?: DeadLetterConfig,
     *     EcsParameters?: EcsParameters,
     *     EventBridgeParameters?: EventBridgeParameters,
     *     Input?: string,
     *     KinesisParameters?: KinesisParameters,
     *     RetryPolicy?: RetryPolicy,
     *     RoleArn: string,
     *     SageMakerPipelineParameters?: SageMakerPipelineParameters,
     *     SqsParameters?: SqsParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
