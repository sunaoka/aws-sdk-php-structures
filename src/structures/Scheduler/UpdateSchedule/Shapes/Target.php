<?php

namespace Sunaoka\Aws\Structures\Scheduler\UpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property DeadLetterConfig|null $DeadLetterConfig
 * @property EcsParameters|null $EcsParameters
 * @property EventBridgeParameters|null $EventBridgeParameters
 * @property string|null $Input
 * @property KinesisParameters|null $KinesisParameters
 * @property RetryPolicy|null $RetryPolicy
 * @property string $RoleArn
 * @property SageMakerPipelineParameters|null $SageMakerPipelineParameters
 * @property SqsParameters|null $SqsParameters
 */
class Target extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     DeadLetterConfig?: DeadLetterConfig|null,
     *     EcsParameters?: EcsParameters|null,
     *     EventBridgeParameters?: EventBridgeParameters|null,
     *     Input?: string|null,
     *     KinesisParameters?: KinesisParameters|null,
     *     RetryPolicy?: RetryPolicy|null,
     *     RoleArn: string,
     *     SageMakerPipelineParameters?: SageMakerPipelineParameters|null,
     *     SqsParameters?: SqsParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
