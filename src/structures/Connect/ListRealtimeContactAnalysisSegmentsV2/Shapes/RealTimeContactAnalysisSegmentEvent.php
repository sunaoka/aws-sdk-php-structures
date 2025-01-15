<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string|null $ParticipantId
 * @property 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR'|null $ParticipantRole
 * @property string|null $DisplayName
 * @property string $EventType
 * @property RealTimeContactAnalysisTimeData $Time
 */
class RealTimeContactAnalysisSegmentEvent extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ParticipantId?: string|null,
     *     ParticipantRole?: 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR'|null,
     *     DisplayName?: string|null,
     *     EventType: string,
     *     Time: RealTimeContactAnalysisTimeData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
