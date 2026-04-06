<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 8589934591>|null $Duration
 * @property int<0, 4294967295> $SpliceEventId
 */
class Scte35SpliceInsertScheduleActionSettings extends Shape
{
    /**
     * @param array{
     *     Duration?: int<0, 8589934591>|null,
     *     SpliceEventId: int<0, 4294967295>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
