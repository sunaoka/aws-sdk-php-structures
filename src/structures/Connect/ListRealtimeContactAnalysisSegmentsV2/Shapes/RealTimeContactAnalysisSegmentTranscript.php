<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ParticipantId
 * @property 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR' $ParticipantRole
 * @property string|null $DisplayName
 * @property string $Content
 * @property string|null $ContentType
 * @property RealTimeContactAnalysisTimeData $Time
 * @property RealTimeContactAnalysisTranscriptItemRedaction|null $Redaction
 * @property 'POSITIVE'|'NEGATIVE'|'NEUTRAL'|null $Sentiment
 */
class RealTimeContactAnalysisSegmentTranscript extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ParticipantId: string,
     *     ParticipantRole: 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR',
     *     DisplayName?: string|null,
     *     Content: string,
     *     ContentType?: string|null,
     *     Time: RealTimeContactAnalysisTimeData,
     *     Redaction?: RealTimeContactAnalysisTranscriptItemRedaction|null,
     *     Sentiment?: 'POSITIVE'|'NEGATIVE'|'NEUTRAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
