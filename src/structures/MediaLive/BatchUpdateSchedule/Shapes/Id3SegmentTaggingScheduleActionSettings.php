<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id3
 * @property string|null $Tag
 */
class Id3SegmentTaggingScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     Id3?: string|null,
     *     Tag?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
