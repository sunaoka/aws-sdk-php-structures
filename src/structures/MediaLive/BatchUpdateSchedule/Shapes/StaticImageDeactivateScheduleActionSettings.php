<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $FadeOut
 * @property int<0, 7>|null $Layer
 */
class StaticImageDeactivateScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     FadeOut?: int<0, max>|null,
     *     Layer?: int<0, 7>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
