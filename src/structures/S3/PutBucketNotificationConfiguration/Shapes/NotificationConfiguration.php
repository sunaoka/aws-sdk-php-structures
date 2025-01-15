<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketNotificationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TopicConfiguration>|null $TopicConfigurations
 * @property list<QueueConfiguration>|null $QueueConfigurations
 * @property list<LambdaFunctionConfiguration>|null $LambdaFunctionConfigurations
 * @property EventBridgeConfiguration|null $EventBridgeConfiguration
 */
class NotificationConfiguration extends Shape
{
    /**
     * @param array{
     *     TopicConfigurations?: list<TopicConfiguration>|null,
     *     QueueConfigurations?: list<QueueConfiguration>|null,
     *     LambdaFunctionConfigurations?: list<LambdaFunctionConfiguration>|null,
     *     EventBridgeConfiguration?: EventBridgeConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
