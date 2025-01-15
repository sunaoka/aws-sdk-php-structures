<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PutSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $contentType
 * @property string|null $intentName
 * @property string|null $slots
 * @property string|null $sessionAttributes
 * @property string|null $message
 * @property string|null $encodedMessage
 * @property 'PlainText'|'CustomPayload'|'SSML'|'Composite'|null $messageFormat
 * @property 'ElicitIntent'|'ConfirmIntent'|'ElicitSlot'|'Fulfilled'|'ReadyForFulfillment'|'Failed'|null $dialogState
 * @property string|null $slotToElicit
 * @property \Psr\Http\Message\StreamInterface $audioStream
 * @property string|null $sessionId
 * @property string|null $activeContexts
 */
class PutSessionResponse extends Response
{
}
