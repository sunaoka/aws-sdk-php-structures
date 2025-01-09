<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Scte35Descriptor> $Scte35Descriptors
 */
class Scte35TimeSignalScheduleActionSettings extends Shape
{
    /**
     * @param array{Scte35Descriptors: list<Scte35Descriptor>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
