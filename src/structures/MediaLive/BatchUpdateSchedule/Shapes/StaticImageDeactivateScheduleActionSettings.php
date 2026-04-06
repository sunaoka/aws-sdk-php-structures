<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $FadeOut
 * @property int|null $Layer
 */
class StaticImageDeactivateScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     FadeOut?: int|null,
     *     Layer?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
