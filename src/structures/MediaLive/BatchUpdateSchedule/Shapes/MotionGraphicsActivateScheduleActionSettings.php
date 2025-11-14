<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Duration
 * @property string|null $PasswordParam
 * @property string|null $Url
 * @property string|null $Username
 */
class MotionGraphicsActivateScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     Duration?: int|null,
     *     PasswordParam?: string|null,
     *     Url?: string|null,
     *     Username?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
