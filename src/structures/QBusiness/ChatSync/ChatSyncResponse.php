<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $conversationId
 * @property string $systemMessage
 * @property string $systemMessageId
 * @property string $userMessageId
 * @property Shapes\ActionReview $actionReview
 * @property Shapes\AuthChallengeRequest $authChallengeRequest
 * @property list<Shapes\SourceAttribution> $sourceAttributions
 * @property list<Shapes\AttachmentOutput> $failedAttachments
 */
class ChatSyncResponse extends Response
{
}
