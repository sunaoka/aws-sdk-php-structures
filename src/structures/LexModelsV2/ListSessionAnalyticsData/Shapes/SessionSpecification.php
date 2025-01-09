<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionAnalyticsData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botAliasId
 * @property string $botVersion
 * @property string $localeId
 * @property string $channel
 * @property string $sessionId
 * @property \Aws\Api\DateTimeResult $conversationStartTime
 * @property \Aws\Api\DateTimeResult $conversationEndTime
 * @property int $conversationDurationSeconds
 * @property 'Success'|'Failure'|'Dropped' $conversationEndState
 * @property 'Speech'|'Text'|'DTMF'|'MultiMode' $mode
 * @property int $numberOfTurns
 * @property list<InvokedIntentSample> $invokedIntentSamples
 * @property string $originatingRequestId
 */
class SessionSpecification extends Shape
{
    /**
     * @param array{
     *     botAliasId?: string,
     *     botVersion?: string,
     *     localeId?: string,
     *     channel?: string,
     *     sessionId?: string,
     *     conversationStartTime?: \Aws\Api\DateTimeResult,
     *     conversationEndTime?: \Aws\Api\DateTimeResult,
     *     conversationDurationSeconds?: int,
     *     conversationEndState?: 'Success'|'Failure'|'Dropped',
     *     mode?: 'Speech'|'Text'|'DTMF'|'MultiMode',
     *     numberOfTurns?: int,
     *     invokedIntentSamples?: list<InvokedIntentSample>,
     *     originatingRequestId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
