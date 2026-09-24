<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\UpdateSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MessageGroupId
 * @property string|null $MessageDeduplicationId
 * @property string|null $Subject
 * @property string|null $MessageStructure
 * @property array<string, SnsMessageAttributeValue>|null $MessageAttributes
 */
class SnsParameters extends Shape
{
    /**
     * @param array{
     *     MessageGroupId?: string|null,
     *     MessageDeduplicationId?: string|null,
     *     Subject?: string|null,
     *     MessageStructure?: string|null,
     *     MessageAttributes?: array<string, SnsMessageAttributeValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
