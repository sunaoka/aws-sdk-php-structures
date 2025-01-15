<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $FadeOut
 * @property int<0, 7>|null $Layer
 * @property list<string> $OutputNames
 */
class StaticImageOutputDeactivateScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     FadeOut?: int<0, max>|null,
     *     Layer?: int<0, 7>|null,
     *     OutputNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
