<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TopicConfigurationDeprecated $TopicConfiguration
 * @property QueueConfigurationDeprecated $QueueConfiguration
 * @property CloudFunctionConfiguration $CloudFunctionConfiguration
 */
class NotificationConfigurationDeprecated extends Shape
{
    /**
     * @param array{
     *     TopicConfiguration?: TopicConfigurationDeprecated,
     *     QueueConfiguration?: QueueConfigurationDeprecated,
     *     CloudFunctionConfiguration?: CloudFunctionConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
