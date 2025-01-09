<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\CreateMeetingWithAttendees;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $MediaRegion
 * @property string $MeetingHostId
 * @property string $ExternalMeetingId
 * @property Shapes\MeetingFeaturesConfiguration $MeetingFeatures
 * @property Shapes\NotificationsConfiguration $NotificationsConfiguration
 * @property list<Shapes\CreateAttendeeRequestItem> $Attendees
 * @property string $PrimaryMeetingId
 * @property list<string> $TenantIds
 * @property list<Shapes\Tag> $Tags
 */
class CreateMeetingWithAttendeesRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken: string,
     *     MediaRegion: string,
     *     MeetingHostId?: string,
     *     ExternalMeetingId: string,
     *     MeetingFeatures?: Shapes\MeetingFeaturesConfiguration,
     *     NotificationsConfiguration?: Shapes\NotificationsConfiguration,
     *     Attendees: list<Shapes\CreateAttendeeRequestItem>,
     *     PrimaryMeetingId?: string,
     *     TenantIds?: list<string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
