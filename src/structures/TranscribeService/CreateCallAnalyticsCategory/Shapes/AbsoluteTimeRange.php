<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateCallAnalyticsCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 14400000> $StartTime
 * @property int<0, 14400000> $EndTime
 * @property int<0, 14400000> $First
 * @property int<0, 14400000> $Last
 */
class AbsoluteTimeRange extends Shape
{
    /**
     * @param array{
     *     StartTime?: int<0, 14400000>,
     *     EndTime?: int<0, 14400000>,
     *     First?: int<0, 14400000>,
     *     Last?: int<0, 14400000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
