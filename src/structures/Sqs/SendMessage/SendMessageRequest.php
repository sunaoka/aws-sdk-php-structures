<?php

namespace Sunaoka\Aws\Structures\Sqs\SendMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 * @property string $MessageBody
 * @property int $DelaySeconds
 * @property array<string, Shapes\MessageAttributeValue> $MessageAttributes
 * @property array<'AWSTraceHeader', Shapes\MessageSystemAttributeValue> $MessageSystemAttributes
 * @property string $MessageDeduplicationId
 * @property string $MessageGroupId
 */
class SendMessageRequest extends Request
{
    /**
     * @param array{
     *     QueueUrl: string,
     *     MessageBody: string,
     *     DelaySeconds?: int,
     *     MessageAttributes?: array<string, Shapes\MessageAttributeValue>,
     *     MessageSystemAttributes?: array<'AWSTraceHeader', Shapes\MessageSystemAttributeValue>,
     *     MessageDeduplicationId?: string,
     *     MessageGroupId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
