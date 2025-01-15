<?php

namespace Sunaoka\Aws\Structures\Sqs\SendMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 * @property string $MessageBody
 * @property int|null $DelaySeconds
 * @property array<string, Shapes\MessageAttributeValue>|null $MessageAttributes
 * @property array<'AWSTraceHeader', Shapes\MessageSystemAttributeValue>|null $MessageSystemAttributes
 * @property string|null $MessageDeduplicationId
 * @property string|null $MessageGroupId
 */
class SendMessageRequest extends Request
{
    /**
     * @param array{
     *     QueueUrl: string,
     *     MessageBody: string,
     *     DelaySeconds?: int|null,
     *     MessageAttributes?: array<string, Shapes\MessageAttributeValue>|null,
     *     MessageSystemAttributes?: array<'AWSTraceHeader', Shapes\MessageSystemAttributeValue>|null,
     *     MessageDeduplicationId?: string|null,
     *     MessageGroupId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
