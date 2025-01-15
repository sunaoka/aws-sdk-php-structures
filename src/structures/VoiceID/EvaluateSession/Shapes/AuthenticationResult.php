<?php

namespace Sunaoka\Aws\Structures\VoiceID\EvaluateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $AudioAggregationEndedAt
 * @property \Aws\Api\DateTimeResult|null $AudioAggregationStartedAt
 * @property string|null $AuthenticationResultId
 * @property AuthenticationConfiguration|null $Configuration
 * @property string|null $CustomerSpeakerId
 * @property 'ACCEPT'|'REJECT'|'NOT_ENOUGH_SPEECH'|'SPEAKER_NOT_ENROLLED'|'SPEAKER_OPTED_OUT'|'SPEAKER_ID_NOT_PROVIDED'|'SPEAKER_EXPIRED'|null $Decision
 * @property string|null $GeneratedSpeakerId
 * @property int<0, 100>|null $Score
 */
class AuthenticationResult extends Shape
{
    /**
     * @param array{
     *     AudioAggregationEndedAt?: \Aws\Api\DateTimeResult|null,
     *     AudioAggregationStartedAt?: \Aws\Api\DateTimeResult|null,
     *     AuthenticationResultId?: string|null,
     *     Configuration?: AuthenticationConfiguration|null,
     *     CustomerSpeakerId?: string|null,
     *     Decision?: 'ACCEPT'|'REJECT'|'NOT_ENOUGH_SPEECH'|'SPEAKER_NOT_ENROLLED'|'SPEAKER_OPTED_OUT'|'SPEAKER_ID_NOT_PROVIDED'|'SPEAKER_EXPIRED'|null,
     *     GeneratedSpeakerId?: string|null,
     *     Score?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
