<?php

namespace Sunaoka\Aws\Structures\Sqs\SendMessageBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $MessageBody
 * @property int $DelaySeconds
 * @property array<string, MessageAttributeValue> $MessageAttributes
 * @property array<'AWSTraceHeader', MessageSystemAttributeValue> $MessageSystemAttributes
 * @property string $MessageDeduplicationId
 * @property string $MessageGroupId
 */
class SendMessageBatchRequestEntry extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     MessageBody: string,
     *     DelaySeconds?: int,
     *     MessageAttributes?: array<string, MessageAttributeValue>,
     *     MessageSystemAttributes?: array<'AWSTraceHeader', MessageSystemAttributeValue>,
     *     MessageDeduplicationId?: string,
     *     MessageGroupId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
