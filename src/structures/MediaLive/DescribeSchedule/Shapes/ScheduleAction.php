<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActionName
 * @property ScheduleActionSettings $ScheduleActionSettings
 * @property ScheduleActionStartSettings $ScheduleActionStartSettings
 */
class ScheduleAction extends Shape
{
    /**
     * @param array{
     *     ActionName: string,
     *     ScheduleActionSettings: ScheduleActionSettings,
     *     ScheduleActionStartSettings: ScheduleActionStartSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
