<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $FadeOut
 * @property int<0, 7> $Layer
 * @property list<string> $OutputNames
 */
class StaticImageOutputDeactivateScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     FadeOut?: int<0, max>,
     *     Layer?: int<0, 7>,
     *     OutputNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
