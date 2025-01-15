<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionAnalyticsData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $botAliasId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property string|null $channel
 * @property string|null $sessionId
 * @property \Aws\Api\DateTimeResult|null $conversationStartTime
 * @property \Aws\Api\DateTimeResult|null $conversationEndTime
 * @property int|null $conversationDurationSeconds
 * @property 'Success'|'Failure'|'Dropped'|null $conversationEndState
 * @property 'Speech'|'Text'|'DTMF'|'MultiMode'|null $mode
 * @property int|null $numberOfTurns
 * @property list<InvokedIntentSample>|null $invokedIntentSamples
 * @property string|null $originatingRequestId
 */
class SessionSpecification extends Shape
{
    /**
     * @param array{
     *     botAliasId?: string|null,
     *     botVersion?: string|null,
     *     localeId?: string|null,
     *     channel?: string|null,
     *     sessionId?: string|null,
     *     conversationStartTime?: \Aws\Api\DateTimeResult|null,
     *     conversationEndTime?: \Aws\Api\DateTimeResult|null,
     *     conversationDurationSeconds?: int|null,
     *     conversationEndState?: 'Success'|'Failure'|'Dropped'|null,
     *     mode?: 'Speech'|'Text'|'DTMF'|'MultiMode'|null,
     *     numberOfTurns?: int|null,
     *     invokedIntentSamples?: list<InvokedIntentSample>|null,
     *     originatingRequestId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
