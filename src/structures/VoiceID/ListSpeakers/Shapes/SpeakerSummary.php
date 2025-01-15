<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListSpeakers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $CustomerSpeakerId
 * @property string|null $DomainId
 * @property string|null $GeneratedSpeakerId
 * @property \Aws\Api\DateTimeResult|null $LastAccessedAt
 * @property 'ENROLLED'|'EXPIRED'|'OPTED_OUT'|'PENDING'|null $Status
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class SpeakerSummary extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     CustomerSpeakerId?: string|null,
     *     DomainId?: string|null,
     *     GeneratedSpeakerId?: string|null,
     *     LastAccessedAt?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'ENROLLED'|'EXPIRED'|'OPTED_OUT'|'PENDING'|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
