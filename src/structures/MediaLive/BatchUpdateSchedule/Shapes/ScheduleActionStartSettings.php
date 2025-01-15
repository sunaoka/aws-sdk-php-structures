<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FixedModeScheduleActionStartSettings|null $FixedModeScheduleActionStartSettings
 * @property FollowModeScheduleActionStartSettings|null $FollowModeScheduleActionStartSettings
 * @property ImmediateModeScheduleActionStartSettings|null $ImmediateModeScheduleActionStartSettings
 */
class ScheduleActionStartSettings extends Shape
{
    /**
     * @param array{
     *     FixedModeScheduleActionStartSettings?: FixedModeScheduleActionStartSettings|null,
     *     FollowModeScheduleActionStartSettings?: FollowModeScheduleActionStartSettings|null,
     *     ImmediateModeScheduleActionStartSettings?: ImmediateModeScheduleActionStartSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
