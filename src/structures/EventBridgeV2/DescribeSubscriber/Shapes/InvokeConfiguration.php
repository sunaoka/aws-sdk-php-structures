<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property LambdaParameters|null $LambdaParameters
 * @property SqsParameters|null $SqsParameters
 * @property SnsParameters|null $SnsParameters
 * @property KinesisParameters|null $KinesisParameters
 * @property StepFunctionsParameters|null $StepFunctionsParameters
 * @property HttpParameters|null $HttpParameters
 * @property UniversalTargetParameters|null $UniversalTargetParameters
 * @property EventBusV2Parameters|null $EventBusV2Parameters
 * @property string $TargetArn
 */
class InvokeConfiguration extends Shape
{
    /**
     * @param array{
     *     RoleArn: string,
     *     LambdaParameters?: LambdaParameters|null,
     *     SqsParameters?: SqsParameters|null,
     *     SnsParameters?: SnsParameters|null,
     *     KinesisParameters?: KinesisParameters|null,
     *     StepFunctionsParameters?: StepFunctionsParameters|null,
     *     HttpParameters?: HttpParameters|null,
     *     UniversalTargetParameters?: UniversalTargetParameters|null,
     *     EventBusV2Parameters?: EventBusV2Parameters|null,
     *     TargetArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
