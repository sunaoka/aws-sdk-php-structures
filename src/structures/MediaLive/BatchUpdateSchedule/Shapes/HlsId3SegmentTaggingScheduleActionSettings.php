<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Tag
 * @property string $Id3
 */
class HlsId3SegmentTaggingScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     Tag?: string,
     *     Id3?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
