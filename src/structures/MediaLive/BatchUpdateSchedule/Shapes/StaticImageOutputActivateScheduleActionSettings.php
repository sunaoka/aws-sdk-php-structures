<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Duration
 * @property int<0, max> $FadeIn
 * @property int<0, max> $FadeOut
 * @property int<1, max> $Height
 * @property InputLocation $Image
 * @property int<0, max> $ImageX
 * @property int<0, max> $ImageY
 * @property int<0, 7> $Layer
 * @property int<0, 100> $Opacity
 * @property list<string> $OutputNames
 * @property int<1, max> $Width
 */
class StaticImageOutputActivateScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     Duration?: int<0, max>,
     *     FadeIn?: int<0, max>,
     *     FadeOut?: int<0, max>,
     *     Height?: int<1, max>,
     *     Image: InputLocation,
     *     ImageX?: int<0, max>,
     *     ImageY?: int<0, max>,
     *     Layer?: int<0, 7>,
     *     Opacity?: int<0, 100>,
     *     OutputNames: list<string>,
     *     Width?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
