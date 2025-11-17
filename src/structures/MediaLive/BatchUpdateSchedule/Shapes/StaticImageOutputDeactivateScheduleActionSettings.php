<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $FadeOut
 * @property int|null $Layer
 * @property list<string> $OutputNames
 */
class StaticImageOutputDeactivateScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     FadeOut?: int|null,
     *     Layer?: int|null,
     *     OutputNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
