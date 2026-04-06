<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $RoomUtilizationMetricsEnabled
 * @property EndOfMeetingReminder|null $EndOfMeetingReminder
 * @property InstantBooking|null $InstantBooking
 * @property RequireCheckIn|null $RequireCheckIn
 * @property ProactiveJoin|null $ProactiveJoin
 */
class MeetingRoomConfiguration extends Shape
{
    /**
     * @param array{
     *     RoomUtilizationMetricsEnabled?: bool|null,
     *     EndOfMeetingReminder?: EndOfMeetingReminder|null,
     *     InstantBooking?: InstantBooking|null,
     *     RequireCheckIn?: RequireCheckIn|null,
     *     ProactiveJoin?: ProactiveJoin|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
