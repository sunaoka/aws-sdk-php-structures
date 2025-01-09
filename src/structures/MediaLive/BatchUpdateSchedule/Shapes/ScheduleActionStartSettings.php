<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FixedModeScheduleActionStartSettings $FixedModeScheduleActionStartSettings
 * @property FollowModeScheduleActionStartSettings $FollowModeScheduleActionStartSettings
 * @property ImmediateModeScheduleActionStartSettings $ImmediateModeScheduleActionStartSettings
 */
class ScheduleActionStartSettings extends Shape
{
    /**
     * @param array{
     *     FixedModeScheduleActionStartSettings?: FixedModeScheduleActionStartSettings,
     *     FollowModeScheduleActionStartSettings?: FollowModeScheduleActionStartSettings,
     *     ImmediateModeScheduleActionStartSettings?: ImmediateModeScheduleActionStartSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
