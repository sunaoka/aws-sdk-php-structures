<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FadeOut
 * @property int $Layer
 * @property list<string> $OutputNames
 */
class StaticImageOutputDeactivateScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     FadeOut?: int,
     *     Layer?: int,
     *     OutputNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
