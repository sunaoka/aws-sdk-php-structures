<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ParticipantId
 * @property 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR' $ParticipantRole
 * @property string $DisplayName
 * @property string $Content
 * @property string $ContentType
 * @property RealTimeContactAnalysisTimeData $Time
 * @property RealTimeContactAnalysisTranscriptItemRedaction $Redaction
 * @property 'POSITIVE'|'NEGATIVE'|'NEUTRAL' $Sentiment
 */
class RealTimeContactAnalysisSegmentTranscript extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ParticipantId: string,
     *     ParticipantRole: 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR',
     *     DisplayName?: string,
     *     Content: string,
     *     ContentType?: string,
     *     Time: RealTimeContactAnalysisTimeData,
     *     Redaction?: RealTimeContactAnalysisTranscriptItemRedaction,
     *     Sentiment?: 'POSITIVE'|'NEGATIVE'|'NEUTRAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
