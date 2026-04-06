<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 86400000>|null $Duration
 * @property string|null $PasswordParam
 * @property string|null $Url
 * @property string|null $Username
 */
class MotionGraphicsActivateScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     Duration?: int<0, 86400000>|null,
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
