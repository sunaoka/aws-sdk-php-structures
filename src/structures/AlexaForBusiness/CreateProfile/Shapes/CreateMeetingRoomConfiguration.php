<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $RoomUtilizationMetricsEnabled
 * @property CreateEndOfMeetingReminder|null $EndOfMeetingReminder
 * @property CreateInstantBooking|null $InstantBooking
 * @property CreateRequireCheckIn|null $RequireCheckIn
 * @property CreateProactiveJoin|null $ProactiveJoin
 */
class CreateMeetingRoomConfiguration extends Shape
{
    /**
     * @param array{
     *     RoomUtilizationMetricsEnabled?: bool|null,
     *     EndOfMeetingReminder?: CreateEndOfMeetingReminder|null,
     *     InstantBooking?: CreateInstantBooking|null,
     *     RequireCheckIn?: CreateRequireCheckIn|null,
     *     ProactiveJoin?: CreateProactiveJoin|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
