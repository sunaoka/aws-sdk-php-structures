<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostText;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $intentName
 * @property Shapes\IntentConfidence $nluIntentConfidence
 * @property list<Shapes\PredictedIntent> $alternativeIntents
 * @property array<string, string> $slots
 * @property array<string, string> $sessionAttributes
 * @property string $message
 * @property Shapes\SentimentResponse $sentimentResponse
 * @property 'PlainText'|'CustomPayload'|'SSML'|'Composite' $messageFormat
 * @property 'ElicitIntent'|'ConfirmIntent'|'ElicitSlot'|'Fulfilled'|'ReadyForFulfillment'|'Failed' $dialogState
 * @property string $slotToElicit
 * @property Shapes\ResponseCard $responseCard
 * @property string $sessionId
 * @property string $botVersion
 * @property list<Shapes\ActiveContext> $activeContexts
 */
class PostTextResponse extends Response
{
}
