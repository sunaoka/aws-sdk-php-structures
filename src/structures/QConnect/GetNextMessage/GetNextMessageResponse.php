<?php

namespace Sunaoka\Aws\Structures\QConnect\GetNextMessage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\RuntimeSessionData> $conversationSessionData
 * @property Shapes\ConversationState $conversationState
 * @property string $nextMessageToken
 * @property string $requestMessageId
 * @property Shapes\MessageOutput $response
 * @property 'TEXT' $type
 */
class GetNextMessageResponse extends Response
{
}
