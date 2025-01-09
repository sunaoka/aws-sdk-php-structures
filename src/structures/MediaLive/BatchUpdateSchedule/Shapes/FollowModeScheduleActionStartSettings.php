<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'END'|'START' $FollowPoint
 * @property string $ReferenceActionName
 */
class FollowModeScheduleActionStartSettings extends Shape
{
    /**
     * @param array{
     *     FollowPoint: 'END'|'START',
     *     ReferenceActionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
