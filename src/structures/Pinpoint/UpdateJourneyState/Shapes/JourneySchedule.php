<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourneyState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property string $Timezone
 */
class JourneySchedule extends Shape
{
    /**
     * @param array{
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     Timezone?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
