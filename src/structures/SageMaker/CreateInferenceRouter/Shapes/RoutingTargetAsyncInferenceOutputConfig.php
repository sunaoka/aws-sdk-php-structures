<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRouter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputPath
 * @property string $S3FailurePath
 * @property string|null $KmsKeyId
 * @property RoutingTargetAsyncInferenceNotificationConfig|null $NotificationConfig
 */
class RoutingTargetAsyncInferenceOutputConfig extends Shape
{
    /**
     * @param array{
     *     S3OutputPath: string,
     *     S3FailurePath: string,
     *     KmsKeyId?: string|null,
     *     NotificationConfig?: RoutingTargetAsyncInferenceNotificationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
