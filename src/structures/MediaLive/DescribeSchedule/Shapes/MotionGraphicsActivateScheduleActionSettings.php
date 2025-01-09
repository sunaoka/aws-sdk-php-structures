<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 86400000> $Duration
 * @property string $PasswordParam
 * @property string $Url
 * @property string $Username
 */
class MotionGraphicsActivateScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     Duration?: int<0, 86400000>,
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
