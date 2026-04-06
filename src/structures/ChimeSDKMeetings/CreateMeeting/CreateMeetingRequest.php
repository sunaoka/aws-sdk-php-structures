<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\CreateMeeting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $MediaRegion
 * @property string|null $MeetingHostId
 * @property string $ExternalMeetingId
 * @property Shapes\NotificationsConfiguration|null $NotificationsConfiguration
 * @property Shapes\MeetingFeaturesConfiguration|null $MeetingFeatures
 * @property string|null $PrimaryMeetingId
 * @property list<string>|null $TenantIds
 * @property list<Shapes\Tag>|null $Tags
 * @property 'Ipv4Only'|'DualStack'|null $MediaPlacementNetworkType
 */
class CreateMeetingRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken: string,
     *     MediaRegion: string,
     *     MeetingHostId?: string|null,
     *     ExternalMeetingId: string,
     *     NotificationsConfiguration?: Shapes\NotificationsConfiguration|null,
     *     MeetingFeatures?: Shapes\MeetingFeaturesConfiguration|null,
     *     PrimaryMeetingId?: string|null,
     *     TenantIds?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     MediaPlacementNetworkType?: 'Ipv4Only'|'DualStack'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
