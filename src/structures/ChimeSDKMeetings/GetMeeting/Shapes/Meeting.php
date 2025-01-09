<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\GetMeeting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MeetingId
 * @property string $MeetingHostId
 * @property string $ExternalMeetingId
 * @property string $MediaRegion
 * @property MediaPlacement $MediaPlacement
 * @property MeetingFeaturesConfiguration $MeetingFeatures
 * @property string $PrimaryMeetingId
 * @property list<string> $TenantIds
 * @property string $MeetingArn
 */
class Meeting extends Shape
{
    /**
     * @param array{
     *     MeetingId?: string,
     *     MeetingHostId?: string,
     *     ExternalMeetingId?: string,
     *     MediaRegion?: string,
     *     MediaPlacement?: MediaPlacement,
     *     MeetingFeatures?: MeetingFeaturesConfiguration,
     *     PrimaryMeetingId?: string,
     *     TenantIds?: list<string>,
     *     MeetingArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
