<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceAnalyticsData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $botAliasId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property string|null $sessionId
 * @property string|null $channel
 * @property 'Speech'|'Text'|'DTMF'|'MultiMode'|null $mode
 * @property \Aws\Api\DateTimeResult|null $conversationStartTime
 * @property \Aws\Api\DateTimeResult|null $conversationEndTime
 * @property string|null $utterance
 * @property \Aws\Api\DateTimeResult|null $utteranceTimestamp
 * @property int|null $audioVoiceDurationMillis
 * @property bool|null $utteranceUnderstood
 * @property string|null $inputType
 * @property string|null $outputType
 * @property string|null $associatedIntentName
 * @property string|null $associatedSlotName
 * @property 'Failed'|'Fulfilled'|'InProgress'|'ReadyForFulfillment'|'Waiting'|'FulfillmentInProgress'|null $intentState
 * @property string|null $dialogActionType
 * @property string|null $botResponseAudioVoiceId
 * @property string|null $slotsFilledInSession
 * @property string|null $utteranceRequestId
 * @property list<UtteranceBotResponse>|null $botResponses
 */
class UtteranceSpecification extends Shape
{
    /**
     * @param array{
     *     botAliasId?: string|null,
     *     botVersion?: string|null,
     *     localeId?: string|null,
     *     sessionId?: string|null,
     *     channel?: string|null,
     *     mode?: 'Speech'|'Text'|'DTMF'|'MultiMode'|null,
     *     conversationStartTime?: \Aws\Api\DateTimeResult|null,
     *     conversationEndTime?: \Aws\Api\DateTimeResult|null,
     *     utterance?: string|null,
     *     utteranceTimestamp?: \Aws\Api\DateTimeResult|null,
     *     audioVoiceDurationMillis?: int|null,
     *     utteranceUnderstood?: bool|null,
     *     inputType?: string|null,
     *     outputType?: string|null,
     *     associatedIntentName?: string|null,
     *     associatedSlotName?: string|null,
     *     intentState?: 'Failed'|'Fulfilled'|'InProgress'|'ReadyForFulfillment'|'Waiting'|'FulfillmentInProgress'|null,
     *     dialogActionType?: string|null,
     *     botResponseAudioVoiceId?: string|null,
     *     slotsFilledInSession?: string|null,
     *     utteranceRequestId?: string|null,
     *     botResponses?: list<UtteranceBotResponse>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
