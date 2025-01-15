<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\CreateMeeting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MeetingId
 * @property string|null $MeetingHostId
 * @property string|null $ExternalMeetingId
 * @property string|null $MediaRegion
 * @property MediaPlacement|null $MediaPlacement
 * @property MeetingFeaturesConfiguration|null $MeetingFeatures
 * @property string|null $PrimaryMeetingId
 * @property list<string>|null $TenantIds
 * @property string|null $MeetingArn
 */
class Meeting extends Shape
{
    /**
     * @param array{
     *     MeetingId?: string|null,
     *     MeetingHostId?: string|null,
     *     ExternalMeetingId?: string|null,
     *     MediaRegion?: string|null,
     *     MediaPlacement?: MediaPlacement|null,
     *     MeetingFeatures?: MeetingFeaturesConfiguration|null,
     *     PrimaryMeetingId?: string|null,
     *     TenantIds?: list<string>|null,
     *     MeetingArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
