<?php

namespace Sunaoka\Aws\Structures\Sns\Publish;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TopicArn
 * @property string|null $TargetArn
 * @property string|null $PhoneNumber
 * @property string $Message
 * @property string|null $Subject
 * @property string|null $MessageStructure
 * @property array<string, Shapes\MessageAttributeValue>|null $MessageAttributes
 * @property string|null $MessageDeduplicationId
 * @property string|null $MessageGroupId
 */
class PublishRequest extends Request
{
    /**
     * @param array{
     *     TopicArn?: string|null,
     *     TargetArn?: string|null,
     *     PhoneNumber?: string|null,
     *     Message: string,
     *     Subject?: string|null,
     *     MessageStructure?: string|null,
     *     MessageAttributes?: array<string, Shapes\MessageAttributeValue>|null,
     *     MessageDeduplicationId?: string|null,
     *     MessageGroupId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
