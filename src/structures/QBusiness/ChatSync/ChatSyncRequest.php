<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $userId
 * @property list<string> $userGroups
 * @property string $userMessage
 * @property list<Shapes\AttachmentInput> $attachments
 * @property Shapes\ActionExecution $actionExecution
 * @property Shapes\AuthChallengeResponse $authChallengeResponse
 * @property string $conversationId
 * @property string $parentMessageId
 * @property Shapes\AttributeFilter $attributeFilter
 * @property 'RETRIEVAL_MODE'|'CREATOR_MODE'|'PLUGIN_MODE' $chatMode
 * @property Shapes\ChatModeConfiguration $chatModeConfiguration
 * @property string $clientToken
 */
class ChatSyncRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     userId?: string,
     *     userGroups?: list<string>,
     *     userMessage?: string,
     *     attachments?: list<Shapes\AttachmentInput>,
     *     actionExecution?: Shapes\ActionExecution,
     *     authChallengeResponse?: Shapes\AuthChallengeResponse,
     *     conversationId?: string,
     *     parentMessageId?: string,
     *     attributeFilter?: Shapes\AttributeFilter,
     *     chatMode?: 'RETRIEVAL_MODE'|'CREATOR_MODE'|'PLUGIN_MODE',
     *     chatModeConfiguration?: Shapes\ChatModeConfiguration,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
