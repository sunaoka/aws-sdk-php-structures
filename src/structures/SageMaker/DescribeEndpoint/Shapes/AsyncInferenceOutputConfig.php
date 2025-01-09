<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyId
 * @property string $S3OutputPath
 * @property AsyncInferenceNotificationConfig $NotificationConfig
 * @property string $S3FailurePath
 */
class AsyncInferenceOutputConfig extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string,
     *     S3OutputPath?: string,
     *     NotificationConfig?: AsyncInferenceNotificationConfig,
     *     S3FailurePath?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
