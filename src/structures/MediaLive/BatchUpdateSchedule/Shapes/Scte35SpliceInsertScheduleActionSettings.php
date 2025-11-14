<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Duration
 * @property int $SpliceEventId
 */
class Scte35SpliceInsertScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     Duration?: int|null,
     *     SpliceEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
