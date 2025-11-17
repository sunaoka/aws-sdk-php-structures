<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $SpliceEventId
 */
class Scte35ReturnToNetworkScheduleActionSettings extends Shape
{
    /**
     * @param array{SpliceEventId: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
