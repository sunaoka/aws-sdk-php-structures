<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ParticipantId
 * @property 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR' $ParticipantRole
 * @property string $DisplayName
 * @property string $EventType
 * @property RealTimeContactAnalysisTimeData $Time
 */
class RealTimeContactAnalysisSegmentEvent extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ParticipantId?: string,
     *     ParticipantRole?: 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR',
     *     DisplayName?: string,
     *     EventType: string,
     *     Time: RealTimeContactAnalysisTimeData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
