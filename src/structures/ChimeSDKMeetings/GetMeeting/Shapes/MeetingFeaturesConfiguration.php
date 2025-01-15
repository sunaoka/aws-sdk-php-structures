<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\GetMeeting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioFeatures|null $Audio
 * @property VideoFeatures|null $Video
 * @property ContentFeatures|null $Content
 * @property AttendeeFeatures|null $Attendee
 */
class MeetingFeaturesConfiguration extends Shape
{
    /**
     * @param array{
     *     Audio?: AudioFeatures|null,
     *     Video?: VideoFeatures|null,
     *     Content?: ContentFeatures|null,
     *     Attendee?: AttendeeFeatures|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
