<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\CreateMeeting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $MediaRegion
 * @property string $MeetingHostId
 * @property string $ExternalMeetingId
 * @property Shapes\NotificationsConfiguration $NotificationsConfiguration
 * @property Shapes\MeetingFeaturesConfiguration $MeetingFeatures
 * @property string $PrimaryMeetingId
 * @property list<string> $TenantIds
 * @property list<Shapes\Tag> $Tags
 */
class CreateMeetingRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken: string,
     *     MediaRegion: string,
     *     MeetingHostId?: string,
     *     ExternalMeetingId: string,
     *     NotificationsConfiguration?: Shapes\NotificationsConfiguration,
     *     MeetingFeatures?: Shapes\MeetingFeaturesConfiguration,
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
