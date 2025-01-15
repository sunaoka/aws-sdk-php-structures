<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $Duration
 * @property int<0, max>|null $FadeIn
 * @property int<0, max>|null $FadeOut
 * @property int<1, max>|null $Height
 * @property InputLocation $Image
 * @property int<0, max>|null $ImageX
 * @property int<0, max>|null $ImageY
 * @property int<0, 7>|null $Layer
 * @property int<0, 100>|null $Opacity
 * @property list<string> $OutputNames
 * @property int<1, max>|null $Width
 */
class StaticImageOutputActivateScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     Duration?: int<0, max>|null,
     *     FadeIn?: int<0, max>|null,
     *     FadeOut?: int<0, max>|null,
     *     Height?: int<1, max>|null,
     *     Image: InputLocation,
     *     ImageX?: int<0, max>|null,
     *     ImageY?: int<0, max>|null,
     *     Layer?: int<0, 7>|null,
     *     Opacity?: int<0, 100>|null,
     *     OutputNames: list<string>,
     *     Width?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
