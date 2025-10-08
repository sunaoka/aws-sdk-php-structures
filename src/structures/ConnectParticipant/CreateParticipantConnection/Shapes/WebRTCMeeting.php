<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\CreateParticipantConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WebRTCMediaPlacement|null $MediaPlacement
 * @property MeetingFeaturesConfiguration|null $MeetingFeatures
 * @property string|null $MeetingId
 */
class WebRTCMeeting extends Shape
{
    /**
     * @param array{
     *     MediaPlacement?: WebRTCMediaPlacement|null,
     *     MeetingFeatures?: MeetingFeaturesConfiguration|null,
     *     MeetingId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
