<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostContent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $contentType
 * @property string|null $intentName
 * @property string|null $nluIntentConfidence
 * @property string|null $alternativeIntents
 * @property string|null $slots
 * @property string|null $sessionAttributes
 * @property string|null $sentimentResponse
 * @property string|null $message
 * @property string|null $encodedMessage
 * @property 'PlainText'|'CustomPayload'|'SSML'|'Composite'|null $messageFormat
 * @property 'ElicitIntent'|'ConfirmIntent'|'ElicitSlot'|'Fulfilled'|'ReadyForFulfillment'|'Failed'|null $dialogState
 * @property string|null $slotToElicit
 * @property string|null $inputTranscript
 * @property string|null $encodedInputTranscript
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $audioStream
 * @property string|null $botVersion
 * @property string|null $sessionId
 * @property string|null $activeContexts
 */
class PostContentResponse extends Response
{
}
