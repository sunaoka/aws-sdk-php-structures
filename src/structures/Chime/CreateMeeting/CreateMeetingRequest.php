<?php

namespace Sunaoka\Aws\Structures\Chime\CreateMeeting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string|null $ExternalMeetingId
 * @property string|null $MeetingHostId
 * @property string|null $MediaRegion
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\MeetingNotificationConfiguration|null $NotificationsConfiguration
 */
class CreateMeetingRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken: string,
     *     ExternalMeetingId?: string|null,
     *     MeetingHostId?: string|null,
     *     MediaRegion?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     NotificationsConfiguration?: Shapes\MeetingNotificationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
