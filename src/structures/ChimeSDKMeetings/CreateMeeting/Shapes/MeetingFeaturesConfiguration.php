<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\CreateMeeting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioFeatures $Audio
 * @property VideoFeatures $Video
 * @property ContentFeatures $Content
 * @property AttendeeFeatures $Attendee
 */
class MeetingFeaturesConfiguration extends Shape
{
    /**
     * @param array{
     *     Audio?: AudioFeatures,
     *     Video?: VideoFeatures,
     *     Content?: ContentFeatures,
     *     Attendee?: AttendeeFeatures
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
