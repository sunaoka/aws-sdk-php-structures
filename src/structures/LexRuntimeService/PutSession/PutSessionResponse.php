<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PutSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $contentType
 * @property string $intentName
 * @property string $slots
 * @property string $sessionAttributes
 * @property string $message
 * @property string $encodedMessage
 * @property 'PlainText'|'CustomPayload'|'SSML'|'Composite' $messageFormat
 * @property 'ElicitIntent'|'ConfirmIntent'|'ElicitSlot'|'Fulfilled'|'ReadyForFulfillment'|'Failed' $dialogState
 * @property string $slotToElicit
 * @property string $audioStream
 * @property string $sessionId
 * @property string $activeContexts
 */
class PutSessionResponse extends Response
{
}
