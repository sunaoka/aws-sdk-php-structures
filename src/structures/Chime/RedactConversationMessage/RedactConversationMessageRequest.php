<?php

namespace Sunaoka\Aws\Structures\Chime\RedactConversationMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $ConversationId
 * @property string $MessageId
 */
class RedactConversationMessageRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     ConversationId: string,
     *     MessageId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
