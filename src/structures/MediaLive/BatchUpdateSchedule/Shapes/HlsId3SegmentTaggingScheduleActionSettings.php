<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Tag
 * @property string|null $Id3
 */
class HlsId3SegmentTaggingScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     Tag?: string|null,
     *     Id3?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
