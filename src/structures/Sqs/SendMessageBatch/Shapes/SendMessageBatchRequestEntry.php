<?php

namespace Sunaoka\Aws\Structures\Sqs\SendMessageBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $MessageBody
 * @property int|null $DelaySeconds
 * @property array<string, MessageAttributeValue>|null $MessageAttributes
 * @property array<'AWSTraceHeader', MessageSystemAttributeValue>|null $MessageSystemAttributes
 * @property string|null $MessageDeduplicationId
 * @property string|null $MessageGroupId
 */
class SendMessageBatchRequestEntry extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     MessageBody: string,
     *     DelaySeconds?: int|null,
     *     MessageAttributes?: array<string, MessageAttributeValue>|null,
     *     MessageSystemAttributes?: array<'AWSTraceHeader', MessageSystemAttributeValue>|null,
     *     MessageDeduplicationId?: string|null,
     *     MessageGroupId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
