<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Duration
 * @property int $FadeIn
 * @property int $FadeOut
 * @property int $Height
 * @property InputLocation $Image
 * @property int $ImageX
 * @property int $ImageY
 * @property int $Layer
 * @property int $Opacity
 * @property int $Width
 */
class StaticImageActivateScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     Duration?: int,
     *     FadeIn?: int,
     *     FadeOut?: int,
     *     Height?: int,
     *     Image: InputLocation,
     *     ImageX?: int,
     *     ImageY?: int,
     *     Layer?: int,
     *     Opacity?: int,
     *     Width?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
