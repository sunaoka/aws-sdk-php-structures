<?php

namespace Sunaoka\Aws\Structures\TranscribeService\UpdateCallAnalyticsCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 14400000>|null $StartTime
 * @property int<0, 14400000>|null $EndTime
 * @property int<0, 14400000>|null $First
 * @property int<0, 14400000>|null $Last
 */
class AbsoluteTimeRange extends Shape
{
    /**
     * @param array{
     *     StartTime?: int<0, 14400000>|null,
     *     EndTime?: int<0, 14400000>|null,
     *     First?: int<0, 14400000>|null,
     *     Last?: int<0, 14400000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
