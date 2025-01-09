<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Duration
 * @property string $PasswordParam
 * @property string $Url
 * @property string $Username
 */
class MotionGraphicsActivateScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     Duration?: int,
     *     PasswordParam?: string,
     *     Url?: string,
     *     Username?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
