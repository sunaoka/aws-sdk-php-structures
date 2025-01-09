<?php

namespace Sunaoka\Aws\Structures\Sns\PublishBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Message
 * @property string $Subject
 * @property string $MessageStructure
 * @property array<string, MessageAttributeValue> $MessageAttributes
 * @property string $MessageDeduplicationId
 * @property string $MessageGroupId
 */
class PublishBatchRequestEntry extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Message: string,
     *     Subject?: string,
     *     MessageStructure?: string,
     *     MessageAttributes?: array<string, MessageAttributeValue>,
     *     MessageDeduplicationId?: string,
     *     MessageGroupId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
