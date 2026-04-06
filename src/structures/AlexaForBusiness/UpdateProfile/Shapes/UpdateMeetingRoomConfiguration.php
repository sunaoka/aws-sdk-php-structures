<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $RoomUtilizationMetricsEnabled
 * @property UpdateEndOfMeetingReminder|null $EndOfMeetingReminder
 * @property UpdateInstantBooking|null $InstantBooking
 * @property UpdateRequireCheckIn|null $RequireCheckIn
 * @property UpdateProactiveJoin|null $ProactiveJoin
 */
class UpdateMeetingRoomConfiguration extends Shape
{
    /**
     * @param array{
     *     RoomUtilizationMetricsEnabled?: bool|null,
     *     EndOfMeetingReminder?: UpdateEndOfMeetingReminder|null,
     *     InstantBooking?: UpdateInstantBooking|null,
     *     RequireCheckIn?: UpdateRequireCheckIn|null,
     *     ProactiveJoin?: UpdateProactiveJoin|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
