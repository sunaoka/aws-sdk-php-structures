<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $SpliceEventId
 */
class Scte35ReturnToNetworkScheduleActionSettings extends Shape
{
    /**
     * @param array{SpliceEventId: int<0, 4294967295>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
