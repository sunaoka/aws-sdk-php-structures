<?php

namespace Sunaoka\Aws\Structures\Sns\Publish;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TopicArn
 * @property string $TargetArn
 * @property string $PhoneNumber
 * @property string $Message
 * @property string $Subject
 * @property string $MessageStructure
 * @property array<string, Shapes\MessageAttributeValue> $MessageAttributes
 * @property string $MessageDeduplicationId
 * @property string $MessageGroupId
 */
class PublishRequest extends Request
{
    /**
     * @param array{
     *     TopicArn?: string,
     *     TargetArn?: string,
     *     PhoneNumber?: string,
     *     Message: string,
     *     Subject?: string,
     *     MessageStructure?: string,
     *     MessageAttributes?: array<string, Shapes\MessageAttributeValue>,
     *     MessageDeduplicationId?: string,
     *     MessageGroupId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
