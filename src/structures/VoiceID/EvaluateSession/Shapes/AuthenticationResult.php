<?php

namespace Sunaoka\Aws\Structures\VoiceID\EvaluateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $AudioAggregationEndedAt
 * @property \Aws\Api\DateTimeResult $AudioAggregationStartedAt
 * @property string $AuthenticationResultId
 * @property AuthenticationConfiguration $Configuration
 * @property string $CustomerSpeakerId
 * @property 'ACCEPT'|'REJECT'|'NOT_ENOUGH_SPEECH'|'SPEAKER_NOT_ENROLLED'|'SPEAKER_OPTED_OUT'|'SPEAKER_ID_NOT_PROVIDED'|'SPEAKER_EXPIRED' $Decision
 * @property string $GeneratedSpeakerId
 * @property int $Score
 */
class AuthenticationResult extends Shape
{
    /**
     * @param array{
     *     AudioAggregationEndedAt?: \Aws\Api\DateTimeResult,
     *     AudioAggregationStartedAt?: \Aws\Api\DateTimeResult,
     *     AuthenticationResultId?: string,
     *     Configuration?: AuthenticationConfiguration,
     *     CustomerSpeakerId?: string,
     *     Decision?: 'ACCEPT'|'REJECT'|'NOT_ENOUGH_SPEECH'|'SPEAKER_NOT_ENROLLED'|'SPEAKER_OPTED_OUT'|'SPEAKER_ID_NOT_PROVIDED'|'SPEAKER_EXPIRED',
     *     GeneratedSpeakerId?: string,
     *     Score?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
