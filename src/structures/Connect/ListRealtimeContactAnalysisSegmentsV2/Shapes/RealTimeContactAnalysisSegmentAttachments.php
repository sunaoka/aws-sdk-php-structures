<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ParticipantId
 * @property 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR' $ParticipantRole
 * @property string $DisplayName
 * @property list<RealTimeContactAnalysisAttachment> $Attachments
 * @property RealTimeContactAnalysisTimeData $Time
 */
class RealTimeContactAnalysisSegmentAttachments extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ParticipantId: string,
     *     ParticipantRole: 'AGENT'|'CUSTOMER'|'SYSTEM'|'CUSTOM_BOT'|'SUPERVISOR',
     *     DisplayName?: string,
     *     Attachments: list<RealTimeContactAnalysisAttachment>,
     *     Time: RealTimeContactAnalysisTimeData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
