<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FadeOut
 * @property int $Layer
 */
class StaticImageDeactivateScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     FadeOut?: int,
     *     Layer?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
