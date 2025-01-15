<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostText;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $intentName
 * @property Shapes\IntentConfidence|null $nluIntentConfidence
 * @property list<Shapes\PredictedIntent>|null $alternativeIntents
 * @property array<string, string>|null $slots
 * @property array<string, string>|null $sessionAttributes
 * @property string|null $message
 * @property Shapes\SentimentResponse|null $sentimentResponse
 * @property 'PlainText'|'CustomPayload'|'SSML'|'Composite'|null $messageFormat
 * @property 'ElicitIntent'|'ConfirmIntent'|'ElicitSlot'|'Fulfilled'|'ReadyForFulfillment'|'Failed'|null $dialogState
 * @property string|null $slotToElicit
 * @property Shapes\ResponseCard|null $responseCard
 * @property string|null $sessionId
 * @property string|null $botVersion
 * @property list<Shapes\ActiveContext>|null $activeContexts
 */
class PostTextResponse extends Response
{
}
