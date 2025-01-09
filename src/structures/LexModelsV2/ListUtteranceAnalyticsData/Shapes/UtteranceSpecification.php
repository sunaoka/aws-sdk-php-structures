<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceAnalyticsData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botAliasId
 * @property string $botVersion
 * @property string $localeId
 * @property string $sessionId
 * @property string $channel
 * @property 'Speech'|'Text'|'DTMF'|'MultiMode' $mode
 * @property \Aws\Api\DateTimeResult $conversationStartTime
 * @property \Aws\Api\DateTimeResult $conversationEndTime
 * @property string $utterance
 * @property \Aws\Api\DateTimeResult $utteranceTimestamp
 * @property int $audioVoiceDurationMillis
 * @property bool $utteranceUnderstood
 * @property string $inputType
 * @property string $outputType
 * @property string $associatedIntentName
 * @property string $associatedSlotName
 * @property 'Failed'|'Fulfilled'|'InProgress'|'ReadyForFulfillment'|'Waiting'|'FulfillmentInProgress' $intentState
 * @property string $dialogActionType
 * @property string $botResponseAudioVoiceId
 * @property string $slotsFilledInSession
 * @property string $utteranceRequestId
 * @property list<UtteranceBotResponse> $botResponses
 */
class UtteranceSpecification extends Shape
{
    /**
     * @param array{
     *     botAliasId?: string,
     *     botVersion?: string,
     *     localeId?: string,
     *     sessionId?: string,
     *     channel?: string,
     *     mode?: 'Speech'|'Text'|'DTMF'|'MultiMode',
     *     conversationStartTime?: \Aws\Api\DateTimeResult,
     *     conversationEndTime?: \Aws\Api\DateTimeResult,
     *     utterance?: string,
     *     utteranceTimestamp?: \Aws\Api\DateTimeResult,
     *     audioVoiceDurationMillis?: int,
     *     utteranceUnderstood?: bool,
     *     inputType?: string,
     *     outputType?: string,
     *     associatedIntentName?: string,
     *     associatedSlotName?: string,
     *     intentState?: 'Failed'|'Fulfilled'|'InProgress'|'ReadyForFulfillment'|'Waiting'|'FulfillmentInProgress',
     *     dialogActionType?: string,
     *     botResponseAudioVoiceId?: string,
     *     slotsFilledInSession?: string,
     *     utteranceRequestId?: string,
     *     botResponses?: list<UtteranceBotResponse>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
