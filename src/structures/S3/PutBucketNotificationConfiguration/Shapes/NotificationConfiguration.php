<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketNotificationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TopicConfiguration> $TopicConfigurations
 * @property list<QueueConfiguration> $QueueConfigurations
 * @property list<LambdaFunctionConfiguration> $LambdaFunctionConfigurations
 * @property EventBridgeConfiguration $EventBridgeConfiguration
 */
class NotificationConfiguration extends Shape
{
    /**
     * @param array{
     *     TopicConfigurations?: list<TopicConfiguration>,
     *     QueueConfigurations?: list<QueueConfiguration>,
     *     LambdaFunctionConfigurations?: list<LambdaFunctionConfiguration>,
     *     EventBridgeConfiguration?: EventBridgeConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
