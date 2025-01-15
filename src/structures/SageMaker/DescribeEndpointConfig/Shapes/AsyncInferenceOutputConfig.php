<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KmsKeyId
 * @property string|null $S3OutputPath
 * @property AsyncInferenceNotificationConfig|null $NotificationConfig
 * @property string|null $S3FailurePath
 */
class AsyncInferenceOutputConfig extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string|null,
     *     S3OutputPath?: string|null,
     *     NotificationConfig?: AsyncInferenceNotificationConfig|null,
     *     S3FailurePath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
