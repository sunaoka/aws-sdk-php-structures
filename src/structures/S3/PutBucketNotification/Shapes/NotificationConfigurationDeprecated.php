<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TopicConfigurationDeprecated|null $TopicConfiguration
 * @property QueueConfigurationDeprecated|null $QueueConfiguration
 * @property CloudFunctionConfiguration|null $CloudFunctionConfiguration
 */
class NotificationConfigurationDeprecated extends Shape
{
    /**
     * @param array{
     *     TopicConfiguration?: TopicConfigurationDeprecated|null,
     *     QueueConfiguration?: QueueConfigurationDeprecated|null,
     *     CloudFunctionConfiguration?: CloudFunctionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
