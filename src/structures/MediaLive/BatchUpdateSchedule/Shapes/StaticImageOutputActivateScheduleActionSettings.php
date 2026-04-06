<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Duration
 * @property int|null $FadeIn
 * @property int|null $FadeOut
 * @property int|null $Height
 * @property InputLocation $Image
 * @property int|null $ImageX
 * @property int|null $ImageY
 * @property int|null $Layer
 * @property int|null $Opacity
 * @property list<string> $OutputNames
 * @property int|null $Width
 */
class StaticImageOutputActivateScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     Duration?: int|null,
     *     FadeIn?: int|null,
     *     FadeOut?: int|null,
     *     Height?: int|null,
     *     Image: InputLocation,
     *     ImageX?: int|null,
     *     ImageY?: int|null,
     *     Layer?: int|null,
     *     Opacity?: int|null,
     *     OutputNames: list<string>,
     *     Width?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
