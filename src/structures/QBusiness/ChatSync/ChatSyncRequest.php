<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string|null $userId
 * @property list<string>|null $userGroups
 * @property string|null $userMessage
 * @property list<Shapes\AttachmentInput>|null $attachments
 * @property Shapes\ActionExecution|null $actionExecution
 * @property Shapes\AuthChallengeResponse|null $authChallengeResponse
 * @property string|null $conversationId
 * @property string|null $parentMessageId
 * @property Shapes\AttributeFilter|null $attributeFilter
 * @property 'RETRIEVAL_MODE'|'CREATOR_MODE'|'PLUGIN_MODE'|null $chatMode
 * @property Shapes\ChatModeConfiguration|null $chatModeConfiguration
 * @property string|null $clientToken
 */
class ChatSyncRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     userId?: string|null,
     *     userGroups?: list<string>|null,
     *     userMessage?: string|null,
     *     attachments?: list<Shapes\AttachmentInput>|null,
     *     actionExecution?: Shapes\ActionExecution|null,
     *     authChallengeResponse?: Shapes\AuthChallengeResponse|null,
     *     conversationId?: string|null,
     *     parentMessageId?: string|null,
     *     attributeFilter?: Shapes\AttributeFilter|null,
     *     chatMode?: 'RETRIEVAL_MODE'|'CREATOR_MODE'|'PLUGIN_MODE'|null,
     *     chatModeConfiguration?: Shapes\ChatModeConfiguration|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
