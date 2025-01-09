<?php

namespace Sunaoka\Aws\Structures\Sqs\ReceiveMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MessageId
 * @property string $ReceiptHandle
 * @property string $MD5OfBody
 * @property string $Body
 * @property array<'All'|'SenderId'|'SentTimestamp'|'ApproximateReceiveCount'|'ApproximateFirstReceiveTimestamp'|'SequenceNumber'|'MessageDeduplicationId'|'MessageGroupId'|'AWSTraceHeader'|'DeadLetterQueueSourceArn', string> $Attributes
 * @property string $MD5OfMessageAttributes
 * @property array<string, MessageAttributeValue> $MessageAttributes
 */
class Message extends Shape
{
    /**
     * @param array{
     *     MessageId?: string,
     *     ReceiptHandle?: string,
     *     MD5OfBody?: string,
     *     Body?: string,
     *     Attributes?: array<'All'|'SenderId'|'SentTimestamp'|'ApproximateReceiveCount'|'ApproximateFirstReceiveTimestamp'|'SequenceNumber'|'MessageDeduplicationId'|'MessageGroupId'|'AWSTraceHeader'|'DeadLetterQueueSourceArn', string>,
     *     MD5OfMessageAttributes?: string,
     *     MessageAttributes?: array<string, MessageAttributeValue>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
