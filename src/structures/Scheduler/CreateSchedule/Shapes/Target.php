<?php

namespace Sunaoka\Aws\Structures\Scheduler\CreateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $RoleArn
 * @property DeadLetterConfig|null $DeadLetterConfig
 * @property RetryPolicy|null $RetryPolicy
 * @property string|null $Input
 * @property EcsParameters|null $EcsParameters
 * @property EventBridgeParameters|null $EventBridgeParameters
 * @property EventBridgePutEventsV2Parameters|null $EventBridgePutEventsV2Parameters
 * @property EventBridgePutRawEventsParameters|null $EventBridgePutRawEventsParameters
 * @property KinesisParameters|null $KinesisParameters
 * @property SageMakerPipelineParameters|null $SageMakerPipelineParameters
 * @property SqsParameters|null $SqsParameters
 */
class Target extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     RoleArn: string,
     *     DeadLetterConfig?: DeadLetterConfig|null,
     *     RetryPolicy?: RetryPolicy|null,
     *     Input?: string|null,
     *     EcsParameters?: EcsParameters|null,
     *     EventBridgeParameters?: EventBridgeParameters|null,
     *     EventBridgePutEventsV2Parameters?: EventBridgePutEventsV2Parameters|null,
     *     EventBridgePutRawEventsParameters?: EventBridgePutRawEventsParameters|null,
     *     KinesisParameters?: KinesisParameters|null,
     *     SageMakerPipelineParameters?: SageMakerPipelineParameters|null,
     *     SqsParameters?: SqsParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
