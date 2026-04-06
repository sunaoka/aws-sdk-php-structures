<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id3
 */
class TimedMetadataScheduleActionSettings extends Shape
{
    /**
     * @param array{Id3: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
