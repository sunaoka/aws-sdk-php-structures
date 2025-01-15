<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $conversationId
 * @property string|null $systemMessage
 * @property string|null $systemMessageId
 * @property string|null $userMessageId
 * @property Shapes\ActionReview|null $actionReview
 * @property Shapes\AuthChallengeRequest|null $authChallengeRequest
 * @property list<Shapes\SourceAttribution>|null $sourceAttributions
 * @property list<Shapes\AttachmentOutput>|null $failedAttachments
 */
class ChatSyncResponse extends Response
{
}
