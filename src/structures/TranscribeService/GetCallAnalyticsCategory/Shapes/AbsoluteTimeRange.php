<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetCallAnalyticsCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $StartTime
 * @property int $EndTime
 * @property int $First
 * @property int $Last
 */
class AbsoluteTimeRange extends Shape
{
    /**
     * @param array{
     *     StartTime?: int,
     *     EndTime?: int,
     *     First?: int,
     *     Last?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
