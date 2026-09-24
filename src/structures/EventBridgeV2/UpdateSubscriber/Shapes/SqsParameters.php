<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\UpdateSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MessageGroupId
 * @property string|null $MessageDeduplicationId
 * @property string|null $DelaySeconds
 * @property array<string, SqsMessageAttributeValue>|null $MessageAttributes
 * @property array<string, SqsMessageAttributeValue>|null $MessageSystemAttributes
 */
class SqsParameters extends Shape
{
    /**
     * @param array{
     *     MessageGroupId?: string|null,
     *     MessageDeduplicationId?: string|null,
     *     DelaySeconds?: string|null,
     *     MessageAttributes?: array<string, SqsMessageAttributeValue>|null,
     *     MessageSystemAttributes?: array<string, SqsMessageAttributeValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
