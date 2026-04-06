<?php

namespace Sunaoka\Aws\Structures\Sqs\ReceiveMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MessageId
 * @property string|null $ReceiptHandle
 * @property string|null $MD5OfBody
 * @property string|null $Body
 * @property array<'All'|'SenderId'|'SentTimestamp'|'ApproximateReceiveCount'|'ApproximateFirstReceiveTimestamp'|'SequenceNumber'|'MessageDeduplicationId'|'MessageGroupId'|'AWSTraceHeader'|'DeadLetterQueueSourceArn', string>|null $Attributes
 * @property string|null $MD5OfMessageAttributes
 * @property array<string, MessageAttributeValue>|null $MessageAttributes
 */
class Message extends Shape
{
    /**
     * @param array{
     *     MessageId?: string|null,
     *     ReceiptHandle?: string|null,
     *     MD5OfBody?: string|null,
     *     Body?: string|null,
     *     Attributes?: array<'All'|'SenderId'|'SentTimestamp'|'ApproximateReceiveCount'|'ApproximateFirstReceiveTimestamp'|'SequenceNumber'|'MessageDeduplicationId'|'MessageGroupId'|'AWSTraceHeader'|'DeadLetterQueueSourceArn', string>|null,
     *     MD5OfMessageAttributes?: string|null,
     *     MessageAttributes?: array<string, MessageAttributeValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
