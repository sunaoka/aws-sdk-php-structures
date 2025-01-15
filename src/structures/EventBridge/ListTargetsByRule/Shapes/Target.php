<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListTargetsByRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string|null $RoleArn
 * @property string|null $Input
 * @property string|null $InputPath
 * @property InputTransformer|null $InputTransformer
 * @property KinesisParameters|null $KinesisParameters
 * @property RunCommandParameters|null $RunCommandParameters
 * @property EcsParameters|null $EcsParameters
 * @property BatchParameters|null $BatchParameters
 * @property SqsParameters|null $SqsParameters
 * @property HttpParameters|null $HttpParameters
 * @property RedshiftDataParameters|null $RedshiftDataParameters
 * @property SageMakerPipelineParameters|null $SageMakerPipelineParameters
 * @property DeadLetterConfig|null $DeadLetterConfig
 * @property RetryPolicy|null $RetryPolicy
 * @property AppSyncParameters|null $AppSyncParameters
 */
class Target extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Arn: string,
     *     RoleArn?: string|null,
     *     Input?: string|null,
     *     InputPath?: string|null,
     *     InputTransformer?: InputTransformer|null,
     *     KinesisParameters?: KinesisParameters|null,
     *     RunCommandParameters?: RunCommandParameters|null,
     *     EcsParameters?: EcsParameters|null,
     *     BatchParameters?: BatchParameters|null,
     *     SqsParameters?: SqsParameters|null,
     *     HttpParameters?: HttpParameters|null,
     *     RedshiftDataParameters?: RedshiftDataParameters|null,
     *     SageMakerPipelineParameters?: SageMakerPipelineParameters|null,
     *     DeadLetterConfig?: DeadLetterConfig|null,
     *     RetryPolicy?: RetryPolicy|null,
     *     AppSyncParameters?: AppSyncParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
