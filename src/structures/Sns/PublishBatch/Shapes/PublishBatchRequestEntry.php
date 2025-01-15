<?php

namespace Sunaoka\Aws\Structures\Sns\PublishBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Message
 * @property string|null $Subject
 * @property string|null $MessageStructure
 * @property array<string, MessageAttributeValue>|null $MessageAttributes
 * @property string|null $MessageDeduplicationId
 * @property string|null $MessageGroupId
 */
class PublishBatchRequestEntry extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Message: string,
     *     Subject?: string|null,
     *     MessageStructure?: string|null,
     *     MessageAttributes?: array<string, MessageAttributeValue>|null,
     *     MessageDeduplicationId?: string|null,
     *     MessageGroupId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
