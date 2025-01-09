<?php

namespace Sunaoka\Aws\Structures\Chime\CreateMeeting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $ExternalMeetingId
 * @property string $MeetingHostId
 * @property string $MediaRegion
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\MeetingNotificationConfiguration $NotificationsConfiguration
 */
class CreateMeetingRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken: string,
     *     ExternalMeetingId?: string,
     *     MeetingHostId?: string,
     *     MediaRegion?: string,
     *     Tags?: list<Shapes\Tag>,
     *     NotificationsConfiguration?: Shapes\MeetingNotificationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
