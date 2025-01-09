<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListSpeakers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $CustomerSpeakerId
 * @property string $DomainId
 * @property string $GeneratedSpeakerId
 * @property \Aws\Api\DateTimeResult $LastAccessedAt
 * @property 'ENROLLED'|'EXPIRED'|'OPTED_OUT'|'PENDING' $Status
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class SpeakerSummary extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     CustomerSpeakerId?: string,
     *     DomainId?: string,
     *     GeneratedSpeakerId?: string,
     *     LastAccessedAt?: \Aws\Api\DateTimeResult,
     *     Status?: 'ENROLLED'|'EXPIRED'|'OPTED_OUT'|'PENDING',
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
