<?php

namespace Sunaoka\Aws\Structures\QBusiness\DeleteConversation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $conversationId
 * @property string $applicationId
 * @property string $userId
 */
class DeleteConversationRequest extends Request
{
    /**
     * @param array{
     *     conversationId: string,
     *     applicationId: string,
     *     userId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
