<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\PutTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $RoleArn
 * @property string $Input
 * @property string $InputPath
 * @property InputTransformer $InputTransformer
 * @property KinesisParameters $KinesisParameters
 * @property RunCommandParameters $RunCommandParameters
 * @property EcsParameters $EcsParameters
 * @property BatchParameters $BatchParameters
 * @property SqsParameters $SqsParameters
 * @property HttpParameters $HttpParameters
 * @property RedshiftDataParameters $RedshiftDataParameters
 * @property SageMakerPipelineParameters $SageMakerPipelineParameters
 * @property DeadLetterConfig $DeadLetterConfig
 * @property RetryPolicy $RetryPolicy
 */
class Target extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Arn: string,
     *     RoleArn?: string,
     *     Input?: string,
     *     InputPath?: string,
     *     InputTransformer?: InputTransformer,
     *     KinesisParameters?: KinesisParameters,
     *     RunCommandParameters?: RunCommandParameters,
     *     EcsParameters?: EcsParameters,
     *     BatchParameters?: BatchParameters,
     *     SqsParameters?: SqsParameters,
     *     HttpParameters?: HttpParameters,
     *     RedshiftDataParameters?: RedshiftDataParameters,
     *     SageMakerPipelineParameters?: SageMakerPipelineParameters,
     *     DeadLetterConfig?: DeadLetterConfig,
     *     RetryPolicy?: RetryPolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
