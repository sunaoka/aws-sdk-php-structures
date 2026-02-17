<?php

namespace Sunaoka\Aws\Structures\QConnect\GetNextMessage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'TEXT'|'TOOL_USE_RESULT' $type
 * @property Shapes\MessageOutput $response
 * @property string $requestMessageId
 * @property Shapes\ConversationState $conversationState
 * @property string|null $nextMessageToken
 * @property list<Shapes\RuntimeSessionData>|null $conversationSessionData
 * @property bool|null $chunkedResponseTerminated
 */
class GetNextMessageResponse extends Response
{
}
