<?php

namespace Sunaoka\Aws\Structures\QBusiness\DeleteConversation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $conversationId
 * @property string $applicationId
 * @property string|null $userId
 */
class DeleteConversationRequest extends Request
{
    /**
     * @param array{
     *     conversationId: string,
     *     applicationId: string,
     *     userId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
