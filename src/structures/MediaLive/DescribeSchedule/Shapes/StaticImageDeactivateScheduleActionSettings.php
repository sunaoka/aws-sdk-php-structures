<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $FadeOut
 * @property int<0, 7> $Layer
 */
class StaticImageDeactivateScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     FadeOut?: int<0, max>,
     *     Layer?: int<0, 7>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
