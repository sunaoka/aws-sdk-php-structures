<?php

namespace Sunaoka\Aws\Structures\Chime\CreateMeetingWithAttendees;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $ExternalMeetingId
 * @property string $MeetingHostId
 * @property string $MediaRegion
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\MeetingNotificationConfiguration $NotificationsConfiguration
 * @property list<Shapes\CreateAttendeeRequestItem> $Attendees
 */
class CreateMeetingWithAttendeesRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken: string,
     *     ExternalMeetingId?: string,
     *     MeetingHostId?: string,
     *     MediaRegion?: string,
     *     Tags?: list<Shapes\Tag>,
     *     NotificationsConfiguration?: Shapes\MeetingNotificationConfiguration,
     *     Attendees?: list<Shapes\CreateAttendeeRequestItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
