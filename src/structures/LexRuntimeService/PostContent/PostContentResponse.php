<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostContent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $contentType
 * @property string $intentName
 * @property string $nluIntentConfidence
 * @property string $alternativeIntents
 * @property string $slots
 * @property string $sessionAttributes
 * @property string $sentimentResponse
 * @property string $message
 * @property string $encodedMessage
 * @property 'PlainText'|'CustomPayload'|'SSML'|'Composite' $messageFormat
 * @property 'ElicitIntent'|'ConfirmIntent'|'ElicitSlot'|'Fulfilled'|'ReadyForFulfillment'|'Failed' $dialogState
 * @property string $slotToElicit
 * @property string $inputTranscript
 * @property string $encodedInputTranscript
 * @property string|resource|\Psr\Http\Message\StreamInterface $audioStream
 * @property string $botVersion
 * @property string $sessionId
 * @property string $activeContexts
 */
class PostContentResponse extends Response
{
}
